<?php
include('NumberGenerator.class.php');
include('Dice.class.php');

$dice = new Dice();
$guess= new NumberGenerator();

echo $dice->throwDice();
?>