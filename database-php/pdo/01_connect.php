<?php

$servername = "localhost";
$username = "root";
$password= "123";

try {
	$conn = new PDO("mysql:host=$servername;dbname=crud", $username, $password);
	// Set the PDO error mode expection.
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected sucessfully.";
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

// To close connection.
$conn = null;




