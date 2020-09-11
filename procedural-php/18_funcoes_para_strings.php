<?php

/*

strtoupper 		Para maiúscula.
strtolower 		Para minúscula.
substr 			Corta as frases/palavras a partir de um delimitador.
str_pad			Complementa uma string com a quantidade especificada.
str_repeat 		Repete.
strlen 			Quantidade de caracteres na string.
str_replace 	Substituir uma palavra em um texto.
strpos 			Retorna a posição de uma palavra em um texto.

*/


$mensagem = "Olá mundo!";
echo substr($mensagem, 4); // Mundo
echo substr($mensagem, 4, 4); // Mun


$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7);
echo $novoObjeto; // "mouse  "
$novoObjeto = str_pad($objeto, 7, "*");
echo $novoObjeto; // "mouse**"
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_LEFT);
echo $novoObjeto; // "**mouse"
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_BOTH);
echo $novoObjeto; // "*mouse*"


$string = str_repeat("Sucesso", 5);
echo $string; // SucessoSucessoSucessoSucessoSucesso


$msg = "Olá mundo";
echo strlen($msg); // 10


$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;


echo strpos($texto, "copa");  // 39