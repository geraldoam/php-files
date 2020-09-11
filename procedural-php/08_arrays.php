<?php

// Arrays
$cars = array("BMW", "Veloster", "Hilux");
echo $cars[0];
$carros[] = "Amarok";
$client = ["Rodrigo", "Felipe", "Bia"];
echo "<hr>";

// Count
echo count($cars);
$totalClient = count($client);
echo "<hr>";


// Foreach
foreach ($cars as $valor) {
	echo $valor."<br>";
}


echo "<hr>";

// Arrays Associativos

$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
echo $pessoa["nome"];
echo $pessoa["idade"];

$pessoa["cidade"] = "Itabuna";

foreach ($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";

// Arrays multidimensionais

$times = array("cariocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro" => "botafogo"),
			   "paulistas" => array("segunda" => "santos", "teceira" => "sao paulo", "quarta" => "palmeiras"),
			   "baianos" => array("bahia", "vitoria", "itabuna"));


echo $times["cariocas"][0];

echo "<br>";

foreach ($times["cariocas"] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<br>";

foreach ($times["paulistas"] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<br>";

foreach ($times["baianos"] as $key) {
	echo $key."<br>";
}

echo "<hr>";