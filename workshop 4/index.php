<?php

$area = 36;

if ($area < 20) {
    echo "too small";
}
elseif ($area > 40) {
    echo "too big";
}
else{
    echo "perfect size";
}
print " <br/>";
for($j=8;$j<=100;$j=$j+2){
	print " ";
	print $j;
	
}
print " <br/>";
$number=1;
do{
$prime=true;
for($i=$number-1;$i>1;$i--){
if($number%$i==0){$prime=false;}
}
if($prime==true){
	echo " "; 
	echo $number;
}
$number++;
}
while($number<=100);

print "<br/>";

$fib1=0;
$fib2=1;
$fibtot=1;
$total=0;

for($k=0;$k<20;$k++){

	$fibtot=$fib1+$fib2;
	$fib1=$fib2;
	$fib2=$fibtot;

	$total=$total+$fib1;

	echo $fib1;
	echo " ";
}

	$total=$total/20;

 print " <br/>";
 print "Average is "+$total;

?>