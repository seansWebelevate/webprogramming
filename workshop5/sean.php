<?php
// $mylocalVar=$_GET["myVar"];
// echo $mylocalVar;


// $var1=1;
// $var2=1;

// if($var1==1){
// 	if($var1==1){
// 		echo "both variables equal 1";
// 	}
// }

// if($var1==1&&$var2==1){
// 	echo "  defineftly the same";
// }

// $mylocalVar=$_GET["myVar"];

// switch ($mylocalVar) {
// 	case 1:
		
// 		echo "equals 1";
// 		break;	
// 	case 2:
		
// 		echo "equals 2";
// 		break;
// 	case 3:
// 		echo "equals 3";
// 		break;
	
// 	default:
		
// 		echo "not equals to 1,2 or 3";	
// 		break;
// }

$number=$_GET["myNumber"];
$complete=FALSE;
	do{
		for($i=0;$i<$number;$i++){
			echo "Number is curently equal to".$number;
			echo "<br/>";
		}
		$complete=TRUE;
	}while($complete==FALSE);

?>