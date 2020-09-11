<?php

$servername = "localhost";
$username = "root";
$password = "123";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) {
	echo "Não foi possível se conectar ao banco de dados, ".mysqli_connect_error();
}