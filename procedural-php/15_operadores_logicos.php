<?php  

/*

- Operadores Lógicos

e 			&& - and
ou 			|| - or
ou 			xor
negação		!

*/

$idade = 25;
$nome = "Rodrigo";

if(($idade == 25) && ($idade <= 30)):
	echo "Ok, tudo certo.";
else:
	echo "Não condiz.";
endif;

if(($idade == 25) || ($idade <= 30)):
	echo "Ok, tudo certo.";
else:
	echo "Não condiz.";
endif;

// Xor para retornar verdadeiro é um ou outro, se os dois forem verdadeiros ele retorna falso. É um ou outro, nada dos dois.
if(($idade == 25) xor ($idade <= 30)):
	echo "Ok, tudo certo.";
else:
	echo "Não condiz.";
endif;

if(($idade != 25) && ($idade <= 30)):
	echo "Ok, tudo certo.";
else:
	echo "Não condiz.";
endif;