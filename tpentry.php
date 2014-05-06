
<!DOCTYPE html>
    <?php
     session_start();$num=$_SESSION['eid'];
        $office = //If there was a previously selected value set it here
        $con=mysql_connect("localhost", "root","");
mysql_select_db("test");

$query1 = "SELECT distinct(d.city) from doctor d,visits v,login l where v.eid=l.eid and v.d_id=d.d_id and v.eid='".$num."'";
$query2 = "SELECT w.work_type from work w;";

$result1 = mysql_query($query1);
$result2 = mysql_query($query2);

$place = '';
$work='';

$tmonth='Janauary';
$tyear='2014';

//$record = mysql_fetch_array($result);


 while($record1 = mysql_fetch_array($result1))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $place .= "<option>".$record1['city']."</option>";
                            
                                  
                        }
while($record2 = mysql_fetch_array($result2))
                        {
                            //$selected = ($office==$record['id']) ? ' selected="selected"' : '';
                            $work .= "<option>".$record2['work_type']."</option>";
                            
                                  
                        }

?>
<html>
    <head>
        <title>TP Entry</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body><form action="tpentry1.php" method="get">
        <?php
    $p= "<center><br><br><h1>Tour Plan For The ".$tmonth."  ".$tyear."<br></h1>";
    echo $p;
    ?><center>
        <table border="2" cellspacing="1">
            <tr>
                <th>S.NO.</th>
                <th>DATE</th>
                <th>DAY</th>
                <th>PLACE</th>
                <th>WORK TYPE</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" name="date1"  id="date1"></td>
                <td><input type="text" name="day1" id="day1"></td>
                <td><select  name="place1" id="place1">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                <td><select name="work1"  id="work1">
                           <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>2</td>
                <td><input type="date" name="date2" id="date2"></td>
                <td><input type="text" name="day2" id="day2"></td>
                <td><select name="place2" id="place2">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work2" id="work2">
                           <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>3</td>
                <td><input type="text" name="date3" id="date3"></td>
                <td><input type="text" name="day3" id="day3"></td>
                <td><select name="place3" id="place3">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                
                   <td><select name="work3" id="work3">
                         <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>4</td>
                <td><input type="text" name="date4" id="date4"></td>
                <td><input type="text" name="day4"  id="day4"></td>
                <td><select name="place4" id="place4">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work4" id="work4">
                         <?php
                      echo $work;
                      ?>                   
                       </select>
                </td>
            </tr>
             <tr>
                <td>5</td>
                <td><input type="text" name="date5" id="date5"></td>
                <td><input type="text" name="day5" id="day5"></td>
                <td><select name="place5" id="place5">
                         <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work5" id="work5">
                         <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>6</td>
                <td><input type="text" name="date6" id="date6"></td>
                <td><input type="text" name="day6" id="day6"></td>
                <td><select name="place6" id="place6">
                         <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work6" id="work6">
                      
                         <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>7</td>
                <td><input type="text" name="date7" id="date7"></td>
                <td><input type="text" name="day7" id="day7"></td>
                <td><select name="place7" id="place7">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                    <td><select name="work7" id="work7">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>8</td>
                <td><input type="text" name="date8"  id="date8"></td>
                <td><input type="text" name="day8" id="day8"></td>
                <td><select name="place8" id="place8">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work8" id="work8">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>9</td>
                <td><input type="text" name="date9" id="date9"></td>
                <td><input type="text" name="day9" id="day9"></td>
                <td><select name="place9" id="place9">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                <td><select name="work9" id="work9">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>10</td>
                <td><input type="text" name="date10"  id="date10"></td>
                <td><input type="text" name="day10" id="day10"></td>
                <td><select name="place10" id="place10">
                         <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work10" id="work10">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>11</td>
                <td><input type="text" name="date11" id="date11"></td>
                <td><input type="text" name="day11" id="day11"></td>
                <td><select name="place11" id="place11">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work11" id="work11">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>12</td>
                <td><input type="text" name="date12" id="date12"></td>
                <td><input type="text" name="day12" id="day12"></td>
                <td><select  name="place12" id="place12">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work12" id="work12">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>13</td>
                <td><input type="text" name="date13" id="date13"></td>
                <td><input type="text" name="day13" id="day13"></td>
                <td><select  name="place13" id="place13">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work13" id="work13">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>14</td>
                <td><input type="text" name="date14" id="date14"></td>
                <td><input type="text" name="day14" id="day14"></td>
                <td><select name="place14" id="place14">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work14" id="work14">
                       <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>15</td>
                <td><input type="text" name="date15" id="date15"></td>
                <td><input type="text" name="date15" id="day15"></td>
                <td><select name="place15"  id="place15">
                         <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work15" id="work15">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>16</td>
                <td><input type="text" name="date16" id="date16"></td>
                <td><input type="text" name="day16" id="day16"></td>
                <td><select name="place16" id="place16">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work16" id="work16">
                         <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>17</td>
                <td><input type="text" name="date17" id="date17"></td>
                <td><input type="text" name="day17" id="day17"></td>
                <td><select name="place17" id="place17">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work17" id="work17">
                        
                      <?php
                      echo $work;
                      ?>
                     
                    </select>
                </td>
            </tr>
             <tr>
                <td>18</td>
                <td><input type="text" name="date18" id="date18"></td>
                <td><input type="text" name="day18" id="day18"></td>
                <td><select name="place18" id="place18">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work18" id="work18">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>19</td>
                <td><input type="text" name="date19" id="date19"></td>
                <td><input type="text" name="day19" id="day19"></td>
                <td><select name="place19" id="place19">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work19" id="work19">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>20</td>
                <td><input type="text" name="date20" id="date20"></td>
                <td><input type="text" name="day20" id="day20"></td>
                <td><select name="place20" id="place20">
                         <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select  name="work20" id="work20">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>21</td>
                <td><input type="text" name="date21" id="date21"></td>
                <td><input type="text" name="day21" id="day21"></td>
                <td><select name="place21" id="place21">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work21" id="work21">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
              <tr>
                <td>22</td>
                <td><input type="text" name="date22" id="date22"></td>
                <td><input type="text" name="day22" id="day22"></td>
                <td><select name="place22" id="place22">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work22" id="work22">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>23</td>
                <td><input type="text" name="date23" id="date23"></td>
                <td><input type="text" name="day23" id="day23"></td>
                <td><select name="place23" id="place23">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work23" id="work23">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>24</td>
                <td><input type="text" name="date24" id="date24"></td>
                <td><input type="text" name="day24" id="day24"></td>
                <td><select name="place24" id="place24">
                       <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work24" id="work24">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>25</td>
                <td><input type="text" name="date25" id="date25"></td>
                <td><input type="text" name="day25" id="day25"></td>
                <td><select name="place25" id="place25">
                         <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work25" id="work25">
                         <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>26</td>
                <td><input type="text" name="date26" id="date26"></td>
                <td><input type="text" name="day26" id="day26"></td>
                <td><select name="place26" id="place26">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work26" id="work26">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>27</td>
                <td><input type="text" name="date27" id="date27"></td>
                <td><input type="text" name="day27" id="day27"></td>
                <td><select name="place27" id="place27">
                       <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work27" id="work27">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>28</td>
                <td><input type="text" name="date28" id="date28"></td>
                <td><input type="text" name="day28" id="day28"></td>
                <td><select name="place28" id="place28">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work28" id="work28">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>29</td>
                <td><input type="text" name="date29" id="date29"></td>
                <td><input type="text" name="day29" id="day29"></td>
                <td><select name="place29" id="place29">
                        <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work29" id="work29">
                         <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
             <tr>
                <td>30</td>
                <td><input type="text" name="date30" id="date30"></td>
                <td><input type="text" name="day30" id="day30"></td>
                <td><select name="place30" id="place30">
                         <?php
                      echo $place;
                      ?>
                    </select>
                </td>
                   <td><select name="work30" id="work30">
                        <?php
                      echo $work;
                      ?>
                    </select>
                </td>
            </tr>
            
            
        </table></center>
            </form>
        <?php   $_SESSION[]=$_GET[]     ?>
    </body>
</html>

    </body>
</html>
