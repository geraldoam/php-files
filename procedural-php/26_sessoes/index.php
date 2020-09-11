<?php 

session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo session_id();


?>