<?php
 session_start();$eid=$_SESSION['eid'];
   $con1=mysql_connect("localhost", "root","");
mysql_select_db("test");

$tpmonth=$_GET['viewmonth'];
$tpyear=$_GET['viewyear'];
$tpquery1 = "select * from tpentry  where eid ='$eid' tpdate like "."'$tpyear'-'$tpmonth'-%".";";

$tpresult1 = mysql_query($tpquery1);

$tptab='<table border = "2" ><tr><th>S.no</th><th>Date</th><th>Place</th><th>Work Type</th><tr>';
$num=1;

while($tprecord1 = mysql_fetch_array($tpresult1))
                        {
                            
                            $tab .= "<tr><td>".$num."</td><td>".$record1['tpdate']."</td><td>".$record1['place']."</td><td>".$record1['worktype']."</td></tr>";
                            $num++;                                  
                        }
						$tptab.="</table>";
                        mysql_close($con1);
                        ?>
<html>
    <head>
        <title>TPview</title>
    </head>
    <body>
        <?php
        $p= "<center><br><br><h1>Tour Plan Report For The Month" ."$tpmonth"."$tpyear"."<br></h1>";
        echo $p;     
        echo $tab;
            ?>
       
    </body>
</html>