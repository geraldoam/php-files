<?php

/* 
Manipulação de Arquivos

fopen()
fclose()
fwrite()
!feof()
fgets()
filesize

*/


$file = 'file.txt';
$content = "Conteudo de teste\r\n";
$sizeFile = filesize($file);

$openFile = fopen($file, 'r');

while (!feof($openFile)) {
	$line = fgets($openFile, $sizeFile);
	echo $line;
}

// fwrite($openFile, $content);
fclose($openFile);