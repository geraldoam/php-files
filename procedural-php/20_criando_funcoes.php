<?php

function exibirNome($nome){
	echo "Meu nome é $nome.";
}


//


function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4){
	$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
	if ($media >= 7) {
		echo "Aluno $nome foi aprovado com a média de $media.";
	}else{
		echo "Aluno $nome foi reprovado com a média de $media.";
	}
}

calcularMedia("Bob", 1, 5, 7, 10);