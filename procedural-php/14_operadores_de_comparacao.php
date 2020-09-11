<?php 

/*
Operadores de Comparação

==
!=
===
!===
<>
<
>
<=
>=
<=>

*/

if (10 === 11):
	echo "Ok, é verdadeiro.";
else:
	echo "Negativo, é falso.";
endif;


var_dump(20 <=> 30); // -1
var_dump(20 <=> 20); // 0
var_dump(20 <=> 10); // +1