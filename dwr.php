


 
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
 <?php
 session_start();
        $office = //If there was a previously selected value set it here
        $con=mysql_connect("localhost", "root","");
mysql_select_db("test");
$dnum=$_SESSION['eid'];
$query1 = "SELECT d.doc_name from doctor d, visits v,login l where v.eid=l.eid and v.d_id=d.d_id and v.eid='".$dnum."'";
$query2 = "SELECT d.city from doctor d,visits v,login l where v.eid=l.eid and v.d_id=d.d_id and v.eid='".$dnum."'";
$query3 = "SELECT p.p_name from login l,product p where p.div_id=l.div_id and l.eid='".$dnum."'";
$query4 = "SELECT * from work";
$result1 = mysql_query($query1);
$result2 = mysql_query($query2);
$result3 = mysql_query($query3);
$result4 = mysql_query($query4);
$doctor = '';
$city='';
$prod='';
$dwwork='';
//$record = mysql_fetch_array($result);


 while($record1 = mysql_fetch_array($result1))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $doctor .= "<option>".$record1['doc_name']."</option>";
                            
                                  
                        }
while($record2 = mysql_fetch_array($result2))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $city .= "<option>".$record2['city']."</option>";
                            
                                  
                        }
while($record3 = mysql_fetch_array($result3))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $prod .= "<option>".$record3['p_name']."</option>";
                            
                                  
                        }
                        
                        
                        
                       while($record4 = mysql_fetch_array($result4))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $dwwork .= "<option>".$record3['work_type']."</option>";
                            
                                  
                        }

                        mysql_close($con);
?>
<html>
    
    <head>
        <title>DWR</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
    <body><form action="dwr1.php" method="get">
        <?php $p= "<center><br><br><h1>Daily Work Report<br></h1>";
           echo $p;     
           ?>
        
        <br><input type="date" name="dwrdate" id="dwrdate"/><br><br><br>
        
        <table cellspacing="20">
            <tr>
                <td><select name="doc0"><?php
                      echo $doctor;
                      ?>
                    </select></td>
                    
                <td><select name="city0">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod10">
                       <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod20">
                       <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod30">
                        <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work0">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc1">
                       <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city1">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod11"><?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod21">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod31">
                        <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work1">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc2">
                      <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city2">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod12">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod22">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod32">
                     <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work2">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc3">
                        <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city3">
                       <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod13">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod23">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod33">
                      <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work3">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc4">
                        <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city4">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod14">                       <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod24">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod34">
                       <?php
                     echo $prod;?>
                    </select></td>
                    <td><select name="work4">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc5">
                        <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city5">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod15">DOCTOR
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod25">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod35">
                        <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work5">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc6">
                       <?php
                      echo $doctor  ;?>
                    </select></td>
                    
                <td><select name="city6">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod16">
                       <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod26">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod36">
                        <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work6">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc7">
                        <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city7">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod17">
                       <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod27">
                       <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod37">
                        <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work7">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc8">
                       <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city8">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod18">
                       <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod28">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod38">
                         <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work8">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
             <tr>
                <td><select name="doc9">
                        <?php
                      echo $doctor;?>
                    </select></td>
                    
                <td><select name="city9">
                        <?php
                      echo $city;?>
                    </select></td>
                    
                <td><select name="prod19">
                         <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod29">
                        <?php
                      echo $prod;?>
                    </select></td>
                    
                <td><select name="prod39">
                         <?php
                      echo $prod;?>
                    </select></td>
                    <td><select name="work9">
                        <?php
                      echo $dwwork;?>
                    </select></td>
            </tr>
            
        </table>
        
        <input type="submit" value="Go">
        </form>
    </body>
</html>
