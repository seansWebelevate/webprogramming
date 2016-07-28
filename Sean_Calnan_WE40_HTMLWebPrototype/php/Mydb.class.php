

<?php

/**********************************************************
* Author: Sean Calnan
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126871
* Date : 2016/04/26
* Ref: http://www.w3schools.com/sql/sql_create_table.asp   http://www.w3schools.com/php/func_mysqli_error.asp
***********************************************************/




 $con;

		class Mydb{

//function to fill table
 public function setTable($name,$user,$email,$pst,$tel,$select){

    
    $this->con = mysqli_connect("localhost","root","",'website');

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    //set query to insert info into database
    $sql ="INSERT INTO website ( name,username,email,post,mobileNo,selected) VALUES ('".$name."','".$user."','".$email."','".$pst."','".$tel."','".$select."')";


    //run sql and test if it ran correctly.
    if(!$result = $this->con->query($sql)){
        die('There was an error running the query [' . $this->con->error . ']');
    }
    }
 }

	?>