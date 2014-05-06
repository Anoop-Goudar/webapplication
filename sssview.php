<?php
 session_start();$eid=$_SESSION['eid'];
   $con1=mysql_connect("localhost", "root","");
mysql_select_db("test");


$num=1;
$name=$_GET['view0chemist'];;
$date='2014-01-01';
$var='';
$smonth='Janauary';
$syear='2014';
//$var='Consolidated';
  
						$query = "select c_id from chemist where c_name like "."'".$name."'".";";
                            $result = mysql_query($query);
					while($record = mysql_fetch_array($result))
                        {
							        $cid=$record['c_id'];           
                        }
					
					if($var=='Consolidated')
						{
							$tab='<table border = "2" ><tr><th>S.NO</th><th>c_id</th><th>Product</th><th>opening stock</th><th>Closing stock</th><th>Sales</th><th>Receipt</th><tr>';
									$query2 = "select * from consolidated where eid=".$eid."  and cdate like "."'".$date."'".";";
									$result2 = mysql_query($query2);
							while($record1 = mysql_fetch_array($result2))
								{
									
									$tab .= "<tr><td><center>".$num."</center></td><td><center>".$record1['c_id']."</center></td><td><center>".$record1['p_name']."</center></td><td><center>".$record1['opening_stock']."</center></td><td><center>".$record1['closing_stock']."</center></td><td><center>".$record1['sales']."</center></td><td><center>".$record1['receipt']."</center></td></tr>";
									$num++;                                  
								}
							$tab.="</table>";
							mysql_close($con1);
						}
						
					else
						{
							$tab='<table border = "2" ><tr><th>S.NO</th><th>Product</th><th>Opening stock</th><th>Closing stock</th><th>Sales</th><th>Receipt</th><tr>';
							
							$query1 = "select * from consolidated where (eid=".$eid." and c_id=".$cid." and cdate like "."'".$date."'".");";
							$result1 = mysql_query($query1);
							while($record1 = mysql_fetch_array($result1))
									{                            
										$tab .= "<tr><td><center>".$num."</center></td><td><center>".$record1['p_name']."</center></td><td><center>".$record1['opening_stock']."</center></td><td><center>".$record1['closing_stock']."</center></td><td><center>".$record1['sales']."</center></td><td><center>".$record1['receipt']."</center></td></tr>";
										$num++;                                  
									}
							$tab.="</table>";
							mysql_close($con1);  
						}
                        ?>
<html>
    <head>
        <title>SSSview</title>
    </head>
    <body> 
        <?php $p= "<center><br><br><h1>Consolidated Report of ".$smonth."  ".$syear."<br></h1>";
           echo $p;
             echo $tab;
           
          
            ?>
       
    </center> </body>
</html>