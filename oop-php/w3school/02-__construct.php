<?php

class Fruit {
	public $name;
	public $color;

	function __construct($name){
		$this->name = $name;
		$this->color = $color;
	}
	function get_name(){
		return $this->name;
	}
	function get_color(){
		$this->color;
	}
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "\n";
echo $apple->get_color();