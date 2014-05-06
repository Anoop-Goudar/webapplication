<?php

session_start();$eid=$_SESSION['eid'];
   $con1=mysql_connect("localhost", "root","");
mysql_select_db("test");



$insert="";
                        for($num=1;$num<=30;$num++)
                        {
                            $x="date".$num;
                            $y="place".$num;
                            $z="work".$num;
                            $tpdate[$num]=$_SESSION['$x'];
                            $tplace[$num]=$_SESSION['$y'];
                            $twork[$num]=$_SESSION['$z'];
                            
                        }




                        for($num=1;$num<=30;$num++)
                        {
                            
                            $insert="insert into tpentry values ( '$eid','$tpdate[$num]','$tplace[$num]','$twork[$num]')"; 
                            mysql_query($insert);
                        }
						
                        mysql_close($con1);
                        
?>