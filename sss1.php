<?php

session_start();$eid=$_SESSION['eid'];
   $con1=mysql_connect("localhost", "root","");
mysql_select_db("test");






$cname=$_GET['ssschemist'];
$cdate=$_GET['sssdate'];
$pname=$_GET['sssproduct'];
$opstock=$_GET['op'];
$clostock=$_GET['cl'];
$sales=$_GET['sales'];
$receipt=$_GET['receipt'];



$sss1query1 = "SELECT c_id from chemist where cname like ".$cname.";";


$sss1result1 = mysql_query($sss1query1);



 while($sss1record1 = mysql_fetch_array($sss1result1))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $cid =$sss1record1['c_id'];
                            
                                  
                        }



$ssinsert="";
                       




                        
                        
                            
                            $ssinsert="insert into consolidated values ( '$eid','$cid','$cdate','$pname','$opstock','$clostock','$sales',$receipt');"; 
                            mysql_query($ssinsert);
                        
						
                        mysql_close($con1);
                        
?>