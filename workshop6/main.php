<?php
// $array=array(12,15,18,98);
// print "<br/>";

// for($i=0;$i<sizeof($array);$i++){
// 	print $array[$i];
// 	print "<br/>";
// }


// print(getpos(1));


// function getpos($myIndex){


// $array=array(12,15,18,98);


// $answer=0;

// $r=sizeof($array);

// for($i=0;$i<$r;$i++){
// 	if($i==$myIndex)
// 		$answer= $array[$i];
// 	}
// 	return $answer;
// }

// $aP=new arrayPosition();

// print($aP->getpos(3));

// Class arrayPosition{


// function getpos($myIndex){


// $array=array(12,15,18,98);

// $answer=0;

// for($i=0;$i<sizeof($array);$i++){
// 	if($i==$myIndex)
// 		$answer= $array[$i];
// 	}
// 	return $answer;
// }

// }


$aP=new arrayPosition();

$aP->setpos(2,2);

print($aP->getpos(2));

Class arrayPosition{

	 private $array = array(12,15,18,98);

function setpos($myIndex,$myNumber){

	for ($j=0; $j <sizeof($this->array) ; $j++) { 
		if($j==$myIndex){
			 $this->array[$j]=$myNumber;
		}
	}

}

function getpos($myIndex){


$answer=0;

for($i=0;$i<sizeof($this->array);$i++){
	if($i==$myIndex)
		$answer= $this->array[$i];
	}
	return $answer;
}

}


?>