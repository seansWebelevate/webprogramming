<?php
include ('Mydb.class.php');

$servername = "localhost";
$username = "root";
$password = "";
$db_name='test11';

$db=new Mydb($servername,$username,$password,$db_name);

$db->listAnswer();


?>