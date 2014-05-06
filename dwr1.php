<?php

session_start();$eid=$_SESSION['eid'];
   $con1=mysql_connect("localhost", "root","");
mysql_select_db("test");


 $dwdate=$_GET['dwrdate'];
$insert="";
                        for($num=0,$num2=10,$num3=20;$num<10;$num++)
                        {
                            $x="doc".$num;
                            $y="city".$num;
                            $a="prod".$num;
                            $b="prod".$num2;
                            $c="prod".$num3;
                            $d="work".$num;
                            $dwdoc[$num]=$_GET['$x'];
                            $dwcity[$num]=$_GET['$y'];
                            $dwprod1[$num]=$_GET['$a'];
                            $dwprod2[$num]=$_GET['$b'];
                            $dwprod2[$num]=$_GET['$c'];
                           
                            $worktype[$num]=$_GET['$d'];
                            
                        }




                        for($num=0;$num<10;$num++)
                        {
                            
                            $insert="insert into tpentry values ( '$eid','$dwdate[$num]','$dwdoc[$num]','$dwprod1[$num]','$dwprod2[$num]','$dwprod3[$num]','$worktype[$num]','$dwcity[$num]')"; 
                            mysql_query($insert);
                        }
						
                        mysql_close($con1);
                        
?>