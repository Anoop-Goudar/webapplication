<?php
session_start();
$user=$_GET['username'];
$pass=$_GET['password'];



$con=mysql_connect("localhost", "root","anoop");
mysql_select_db("test");
$query1 = "select * from login where eid = ".$user.";";

$result1 = mysql_query($query1);




 while($record1 = mysql_fetch_array($result1))
                        {
                            
                            if($record1['eid']==$user && $record1['password']==$pass)
                            {
                                $_SESSION['eid']=$user;
                                include  "mainframe.html";
                            }
                            else
                            {
                                alert("Wrong Authentication");
                            }
                            
                                  
                        }


?>

  