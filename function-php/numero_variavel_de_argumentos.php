<?php

// Será passado em formato de array
function sum(...$numbers){
	$acc = 0;
	foreach ($numbers as $n) {
		$acc += $n;
	}
	return $acc;
}

echo sum(1, 2, 3, 4); // 10

////

function add($a, $b){
	return $a + $b;
}

echo add(...[1, 2])."\n"; // 3

$a = [1, 2];
echo add(...$a); // 3
