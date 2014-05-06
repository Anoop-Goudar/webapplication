<?php
session_start();$eid=$_SESSION['eid'];


$dwsp='<select name="dwrview0chemist"  id="view0chemist">';
$sscon1=mysql_connect("localhost", "root","");
mysql_select_db("test");

$ssquery1 = "select * from daily;";

$ssresult1 = mysql_query($ssquery1);


while($ssrecord1 = mysql_fetch_array($ssresult1))
                        {
                            
                            $dwsp .= "<option>".$ssrecord1['c_name']."</option>";
                                                           
                        }
						$dwsp.="</select>";
                        mysql_close($sscon1);
                       
?>
<html>
    
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
    <body>
       
        <form action="dwrview.php"method="get">
        
            <?php  echo $dwsp; ?>
        
        <select name="dwrview0month" id="view0month">
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
        </select>
            
            
            <select name="dwrview0year" id="view0year">
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
              
        </select>
            
            
            <input type="submit" value="View">
    </form>
    </body>
</html>
