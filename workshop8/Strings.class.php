<?php

private $string ="";

public function setwriter($input){
	$string=$input;

}

public function getupper(){
	return strtoupper($string);

}

public function getlower(){
	return strtolower($string)
}

public function getfinde(){
	$ans=-1;

	for($i=0;$i<strlen($string);$i++){
		if($ans==-1)
			{
			if($string[$i]=="e"){
				$ans=$i;
			}
		}
	}
	if($ans==-1){
		$ans=0;
	} 
	return $ans;
}

private $cars = array(array("Volvo", "BMW", "Toyota"),array("Volvo", "BMW", "Toyota"),array("Volvo", "BMW", "Toyota"));

$len1=count($cars);
	for($i=0;$i<$len1;$i++){
		$len2=count($cars[$i]);
			for($y=0;$y<$len2;$y++){
				$cars[$i][$y]=rand();

			}
	}


?>