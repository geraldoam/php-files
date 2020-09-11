<?php

/* Email Verification */

$string = "contato@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i";

if (preg_match($padrao, $string)) {
	echo "Válido.";
	echo "<hr>";
	echo $string;
} else {
	echo "Inválido.";
	echo "<hr>";
}