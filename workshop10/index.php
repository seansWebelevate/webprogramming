
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name='test';


$db = new mysqli($servername, $username, $password, $db_name);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = <<<SQL
    SELECT *
    FROM `people`
    WHERE `id` = 1 
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}


while($row = $result->fetch_array()){
    echo $row['name'] . '<br />';
}
?>