<?php
class Sphere{

	const FOUR_THIRDS=1.33;

	public $radius;
	public $diameter;
	public $circumference;
	public $volume;


	public function __construct($diameter){

		$this->diameter=$diameter;

		$this->radius=($diameter/2);

		$this->circumference=$this->calCircumference($this->radius);

		$this->volume=$this->calcVolume($diameter);

	}

	Public function calcVolume($diameter){


		return self::FOUR_THIRDS*pi()*(pow(($diameter/2),3));
	}

		Public function calCircumference($radius){

		$ans= 2*pi()*($radius);
		return $ans;
	}

	Public function setRadius($radius){

		$this->diameter=$radius*2;

		$this->radius=$radius;

		$this->circumference=$this->calCircumference($radius);

		$this->volume=$this->calcVolume($this->diameter);


	}

	public function getArea(){
		return 4*pi()*($this->radius)*($this->radius);
	}	
	public function getVolume(){
		return $this->volume;
	}	
	public function getDiameter(){
		return $this->diameter;
	}



}


?>