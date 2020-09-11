<?php

class Fruit {
	public $name;
	function set_name($name){
		$this->name = $name;
	}
}
$apple = new Fruit();
// set name 
$apple->set_name("Apple");
// or out of class
$apple->name = "Apple";