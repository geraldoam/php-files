<?php

class Fruit{
	public $name;
	public $color;
	public function __construct($name, $color){
		$this->name = $name;
		$this->color = $color;
	}
	protected function intro(){
		echo "The fruit is {$this->name} and the color is {$this->color}.";
	}
}

class Strawberry extends Fruit{
	public function message(){
		echo "Am i a fruit or a berry?";
		// Call protected method from within derived class - OK
		$this->intro();
	}
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red"); // Ok. __construct() is public
$strawberry->message(); // Ok. message() is public
$strawberry->intro(); // ERROR. intro() is protected

//
$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public abnd it calls intro() (which is protected) from within the derived class