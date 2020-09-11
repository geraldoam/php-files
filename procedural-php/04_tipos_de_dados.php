<?php 

//#################### Dados Escalares



	// String

	$nome = "Olá";
	var_dump($nome);

	if(is_string($nome)):
		echo "O nome passado é uma string!";

	else:
		echo "Não é uma string!";

	endif;
		echo "<hr>";



	// Int

	$idade = 25;
	var_dump($idade);

	if(is_int($idade)):
		echo "É um inteiro.";

	else:
		echo "Não é um inteiro.";

	endif;
		echo "<hr>";


	// Float

	$altura = 1.65;
	var_dump($altura);

	if (is_float($altura)):
		echo "É um float.";

	else:
		echo "Não é um float.";

	endif;
		echo "<hr>";



	// Boolean


	$admin = false;
	var_dump($admin);

	if (is_bool($altura)):
		echo "É um booleano.";

	else:
		echo "Não é um booleano.";

	endif;
		echo "<hr>";




//#################### Dados Compostos



	// Array


	$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
	var_dump($carros);

	echo "<hr>";



	// Object

	class Cliente {

		public $nome;

		public function atribuirNome($nome){
			$this->$nome = $nome;
		}

	}

	$cliente = new Cliente();
	$cliente->atribuirNome("i386angel");
	var_dump($cliente);


	if (is_object($cliente)):
		echo "É um objeto.";

	else:
		echo "Não é um objeto.";

	endif;
		echo "<hr>";



//#################### Dados Especiais


	// Null

	$cidade = NULL;
	var_dump($cidade);

