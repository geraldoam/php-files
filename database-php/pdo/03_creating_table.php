<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "myDB";


try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	# Set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	# SQL to create database
	$sql = "CREATE TABLE MyGuets(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

	# Use exec() because no results are returned
	$conn->exec($sql);
	echo "Table MyGuets created successfully!";
} catch (Exception $e) {
	echo $sql . "<br>" . $e->getMessage();
}

# Close connection
$conn = null;