<?php

$senha = "123456";
$novaSenha = base64_encode($senha);

// Mão dupla
echo "base64: ".$novaSenha."\n";
echo "Sua senha é: ". base64_decode($novaSenha)."\n";

// Mão única
echo "MD5: ". md5($senha)."\n";
echo "SHA1: ". sha1($senha)."\n";

