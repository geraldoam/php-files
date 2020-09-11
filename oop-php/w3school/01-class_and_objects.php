<?php

//	Class
class Fruit {
	// Properties
	public $name;
	public $color;

	// Methods
	function set_name($name){
		$this->name = $name;
	}
	function get_name(){
		return $this->name;
	}
	function set_color($color){
		$this->color = $color;
	}
	function get_color(){
		return $this->color;
	}
}


// Objects

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "\n";
echo $banana->get_name();


// Get color

$apple->set_name('Apple');
$apple->set_color('red');

echo "Name: ".$apple->get_name();
echo "\n";
echo "Color: ".$apple->get_color();