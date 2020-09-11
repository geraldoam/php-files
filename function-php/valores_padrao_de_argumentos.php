<?php

function makeCoffe($type = "cappucino"){
	return "Fazendo uma xícara de café $type.\n";
}

echo makeCoffe();
echo makeCoffe(null);
echo makeCoffe("espresso");

//

function iorgutera ($sabor, $tipo = "azeda"){
	return "Fazendo uma taça de $sabor $tipo.\n";
}

echo iorgutera("framboesa"); // Fazendo uma taça de framboesa azeda.