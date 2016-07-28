<?php

 $con;
		class Mydb{

  public function __construct($servername,$username,$password,$db_name){
  	
  	$this->con = mysqli_connect($servername,$username,$password,$db_name);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
}


public function listAnswer(){

  $sql = " SELECT * FROM `correct_guesses`";

if(!$result = $this->con->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}


while($row = $result->fetch_array()){
    echo $row['answer'] . '<br />';
}
  }





}
	?>