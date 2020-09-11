<?php

// Retorna a parte de string especificada pelo parâmetro start e lenght.

$rest = substr("abcdef", -1); // "f"
$rest = substr("abcdef", -2); // "ef"
$rest = substr("abcdef", -3, 1); // "d"


$rest = substr("abcdef", 0, -1); // "abcde"
$rest = substr("abcdef", 2, -1); // "cde"
$rest = substr("abcdef", 4, -4); // false
$rest = substr("abcdef", -3, -1); // "de"