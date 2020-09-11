<?php

/*

	$GLOBALS		- Acessar variáveis globais de qualquer lugar do script PHP.
	$_SERVER		- Contém informações. Contém vários índices.
	$_REQUEST		-
	$_POST			-
	$_GET			-
	$_FILES			-
	$_ENV			-
	$_COOKIE		-
	$_SESSION		-

*/

// $GLOBALS
$x = 10;
$y = 15;

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma(); // 25


// $_SERVER

echo $_SERVER['PHP_SELF']."\n"; // retorna o nome do arquivo.
echo $_SERVER['SERVER_NAME'."\n"]; // retorna o nome do servidor.
echo $_SERVER['SCRIPT_FILENAME'."\n"]; // retorna o caminho de execução do script.
echo $_SERVER['DOCUMENT_ROOT'."\n"]; // retorna o root documento sla 
echo $_SERVER['SERVER_PORT'."\n"]; // retorna a porta do servidor em execução.
echo $_SERVER['REMOTE_ADDR'."\n"]; // o endereço ip de onde o visualizador está vendo a página.