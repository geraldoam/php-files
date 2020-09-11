<?php

declare(stric_types=1);

function sum(int $a, int $b){
	return $a + $b;
}

var_dump(sum(1, 2)); // 3
var_dump(sum(1.5, 2.5)); // Fatal error: TypeError


// Retirando o declare(stric_types=1) se obtém uma tipagem fraca, portando, o segundo var_dump será aceito e retornará 3.

function sum(int $a, int $b){
	return $a + $b;
}

try {
	var_dump(sum(1, 2));
	var_dump(sum(1.5, 2.5));
} catch (TypeError $e) {
	echo 'Error: '.$e->getMessage();
}

// int(3)
// Error: Argument 1 passed to sum() must be of the type integer, float given, called in - on line 10