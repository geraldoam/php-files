<?php

$servername = "localhost";
$username = "root";
$password = "123";

try {
	$conn = new PDO("mysql:host=$servername", $username, $password);

	// Set PDO error mode to exception.
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE DATABASE myDBPDO";

	// Use exec() because no results are returned.
	$conn->exec($sql);
	echo "Database created sucessfully.";
} catch (PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;