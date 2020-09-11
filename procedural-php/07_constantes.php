<?php

// Constantes
define("nome", "Geraldo");
define("estado", "solteiro");
define("idade", 17);
echo 'Meu nome é '.nome.' e minha idade é '.idade.' e meu estado é '.estado;

define("TIMES", ['vasco','flamengo','santos']);
echo "<hr>";

echo TIMES[0];
echo "<hr>";
echo TIMES[1];
echo "<hr>";
echo TIMES[2];
echo "<hr>";

function exibeNome(){
	echo nome;
}

exibeNome();