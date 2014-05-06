<?php
 session_start();$eid=$_SESSION['eid'];
   $con1=mysql_connect("localhost", "root","");
mysql_select_db("test");

$imonth=$_GET['dwrview0month'];
$iyear=$_GET['dwrview0year'];
$query1 = "select * from daily where dailydate like "."'$iyear'-'$imonth'-%".";";

$result1 = mysql_query($query1);

$tab='<table border = "2" ><tr><th>S.no</th><th>Date</th><th>Work Type</th><th>City</th><tr>';
$num=1;
$dmonth='January';
$dyear='2014';
while($record1 = mysql_fetch_array($result1))
                        {
                            
                            $tab .= "<tr><td>".$num."</td><td>".$record1['dailydate']."</td><td>".$record1['work_type']."</td><td>".$record1['city']."</td></tr>";
                            $num++;                                  
                        }
						$tab.="</table>";
                        mysql_close($con1);
                        ?>
<html>
    <head>
        <title>DWRview</title>
    </head>
    <body>
        <?php
        $p= "<center><br><br><h1>Daily Work Report For The Month" ."$dmonth"."$dyear"."<br></h1>";
        echo $p;     
        echo $tab;
            ?>
       
    </body>
</html>