<?php

$options = [
	// Custo - Quanto maior, mais seguro, só que mais irá consumir do hardware.
	// 10 = Default
	'cost' => 10
];

$senha = "123456";
$senha_db = '$2y$10$46sYElQP8UvmZbBAkT3b1ew5k16PE9vuTEoHebfRUSQtFHStym3gi';

if (password_verify($senha, $senha_db)) {
	echo "Senha válida!";
} else {
	echo "Senha inválida.";
}

$securityPassword = password_hash($senha, PASSWORD_BCRYPT, $options);