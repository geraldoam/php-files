<?php

function add_some_extra(&$string){
	$string .= ' e alguma coisa a mais.';
}

$str = 'Isto é uma string, ';
add_some_extra($str);
echo $str; // 'Isto é uma string, e alguma coisa mais.'