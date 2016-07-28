

<?php


/**********************************************************
* Author: Sean Calnan
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126871
* Date : 2016/04/26
* Ref: http://www.w3schools.com/sql/sql_create_table.asp   http://www.w3schools.com/php/func_mysqli_error.asp
***********************************************************/

include ('Mydb.class.php');

$name = $_POST["Name"];
$user = $_POST["N-name"];
$email = $_POST["email"];
$pst = $_POST["pst/loc"];
$tel = $_POST["tel"];
$select = $_POST["sel1"];





// instantiate database class object
$db=new Mydb();

// use function on the instantiated object
$db->setTable($name,$user,$email,$pst,$tel,$select);


//opens success.html as long as no errors in database
      header("Location:../success.html");
        exit();

?>