<?php

class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
// Verify when object belongs to a specific class
var_dump($apple instanceof Fruit); // True