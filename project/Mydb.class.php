/**********************************************************
* Author: Sean Calnan
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126871
* Date : 2016/02/12
* Ref: http://www.w3schools.com/sql/sql_create_table.asp   http://www.w3schools.com/php/func_mysqli_error.asp
***********************************************************/


<?php

 $con;

		class Mydb{

  public function __construct(){
  	
  	$this->con = mysqli_connect("localhost","root","",'project');

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


    // Create table
    $sql = "CREATE TABLE Myflights (
      id INT(6),
      time INT(6),
      destination varchar(20)
      )";


    if (mysqli_query($this->con, $sql)) {
        echo "table created successfully";

    } 
      //check table size
    $sql = "SELECT * FROM `myflights`"

        $query = mysqli_query($this->con,$sql);
        $num= $query->num_rows;


    if($num==8){

    }
    else{
    // populate table
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('1','0700','Dublin')";
    mysqli_query($this->con, $sql);
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('2','0900','Cork')";
    mysqli_query($this->con, $sql);
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('3','1100','Knock')";
    mysqli_query($this->con, $sql);
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('4','1300','Shanon')";
    mysqli_query($this->con, $sql);
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('5','1500','Belfast')";
    mysqli_query($this->con, $sql);
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('6','1700','Dublin')";
    mysqli_query($this->con, $sql);
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('7','1900','Cork')";
    mysqli_query($this->con, $sql);
    $sql = "INSERT INTO `myflights`(`id`, `time`, `destination`) VALUES ('8','2100','Belfast')";
    mysqli_query($this->con, $sql);
    }

    mysqli_close($this->con);

    }





        public function getresult($time, $colume){

    
    $this->con = mysqli_connect("localhost","root","",'project');

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    //set query
    $sql = "SELECT * FROM `myflights` WHERE id='".$time."'";

    if(!$result = $this->con->query($sql)){
        die('There was an error running the query [' . $this->con->error . ']');
    }

//go through result of query
while($row = $result->fetch_array()){
    $ans= $row[$colume] ;
}
//return
return $ans;
    }


}

	?>