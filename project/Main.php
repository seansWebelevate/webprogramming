/**********************************************************
* Author: Sean Calnan
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126871
* Date : 2016/02/12
* Ref: http://www.w3schools.com/html/html_elements.asp
***********************************************************/
<?php
include ('Mydb.class.php');

$time=$_POST['Time'];

//instantiate database class object
$db=new Mydb();

//use function on the instantiated object
$cTime=$db->getresult($time, "time");

$ans=$db->getresult($time, "destination");


?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <head>

<div style="background-color:black;color:white;text-align:center;padding:5px;">
<h1>Departure Times</h1>
</div>

  </head>
<body>

  <div style="line-height:30px;background-color:#eeeeee;height:100%;width:10%;float:left;padding:5px;">
  </div>

  <div style="width:350px;float:left;padding:10px; ">

    <!--Response to user-->
      <p><h1>Congratulations</h1> on winning an all expense paid trip to las Vegas you plane will departe from <?php echo $ans;?> at <?php echo $cTime;?> hrs.
  </div>

  <div style="background-color:black;clear:both;color:white;text-align:center;padding:5px;"></div>
</body>
</html>