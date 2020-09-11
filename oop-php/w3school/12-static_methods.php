<?php

// Static methods can be called directly - without creating an instance of a class.

class ClassName {
	public static function welcome(){
		echo "Hello World!";
	}
}

// Call static method
greeting::welcome();