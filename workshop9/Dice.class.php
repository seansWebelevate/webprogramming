	<?php
		class Dice{


private static $faceValue;

	public function throwDice(){

		$this->faceValue=rand(1,6);
		return $this->faceValue;
	}

}
	?>