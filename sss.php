<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <?php
 session_start();$eid=$_SESSION['eid'];
        $office = //If there was a previously selected value set it here
        $ssscon=mysql_connect("localhost", "root","");
mysql_select_db("test");

$sssquery1 = "SELECT * from chemist";
$sssquery2 = "SELECT * from login l,product pwhere p.div_id=l.div_id and l.eid=".$eid.";";

$sssresult1 = mysql_query($sssquery1);
$sssresult2 = mysql_query($sssquery2);


$ssc="<select name='ssschemist' id='ssschemist'>";
$ssp="<select name='sssproduct' id='sssproduct'>";

while($sssrecord1 = mysql_fetch_array($sssresult1))
                        {
                            
                            $ssc .= "<option>".$sssrecord1['c_name']."</option>";
                                                           
                        }
						$ssc.="</select>";
                        
while($sssrecord2 = mysql_fetch_array($sssresult2))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $ssp .= "<option>".$sssrecord2['p_name']."</option>";


                        }
                                $ssp.="</select>";

                        mysql_close($ssscon);
?>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body><form action="sss1.php" method="get">

   <center> 
       <br><br><br><br><br><br><br><br><br>
      <table>
           
          <tr><td>Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date"  name="sssdate"/></td>
              <td>
                <?php  echo $ssc; ?>
              </td>
              
              <td><?php  echo $ssp; ?></td>
      </table>
      <br>
      <br>
      <table>
          <tr>
              <td><b>Opening stock</b>

              </td>
              <td><input type="text" name="op" ><br>

              </td>
          </tr>

          <tr>
              <td> <b>Sales</b>

              </td>
              <td><input type="text" name="sales" ><br>

              </td>
          </tr>

          <tr>
              <td><b>Receipt</b>

              </td>
              <td><input type="text" name="receipt" ><br>

              </td>
          </tr>

          <tr>
              <td>
      <b>Closing Stock</b>
              </td>
              <td>
      <input type="text" name="cl" >
              </td>
          </tr>
      
     
     

      </table></center>

                  

        
          </form>
  </body>
</html>
