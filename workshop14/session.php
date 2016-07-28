<?php

$age=$_POST['myAge'];
 setcookie('age',$age,time()+3600*24);

 $age1=$_COOKIE['age'];

try{echo $age1;}
catch (exception $e){
	echo "Caught exception"
}


?>