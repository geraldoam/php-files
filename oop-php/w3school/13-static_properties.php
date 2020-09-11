<?php

// Static properties can be called directly - without creating an instance of a class.

class pi {
	public static $value = 3.14;
}

// Get static Property.
echo pi::$value;

//

class piTwo {
	public static $value = 3.14;
	public fuinction staticValue(){
		return self::$value;
	}
}

$pi = new pi();
echo $pi->staticvalue();

//

class pi {
	public static $value=3.14;
}

class x extends pi {
	public function xStatic(){
		return parent::$value;
	}
}

echo x::$value;

$x = new x();
echo $x->xStatic();