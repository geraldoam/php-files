<?php

/*

number_format 		Formatar números.
round 				Arredondar valores.
ceil 				Arrendodar valores sempre para cima.
floor 				Arrendodar valores sempre para baixo.
rand 				Gerar números aleatórios.

*/

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco"; // R$ 1.234,56


echo round(3.6); // 4

echo ceil(3.1); // 4

echo floor(3.9); // 3


echo rand(1,20); // Números aleatórios de 1 a 20.