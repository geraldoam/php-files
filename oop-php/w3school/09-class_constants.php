<?php

/* Using const */

class Goodbye {
	const LEAVING_MESSAGE = "Thank you for visiting here.";
}

/* Using :: to consult */
echo Goodbye::LEAVING_MESSAGE;


/* Or, consult in class */ 

class Goodbye {
	const LEAVING_MESSAGE = "Thank you for vistit here.";
	public function byebye(){
		echo self::LEAVING_MESSAGE;
	}
}

$goodbye = new Goodbye();
$goodbye->byebye();