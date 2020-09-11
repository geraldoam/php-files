<?php

// For
for($contador = 0; $contador <= 10; $contador++):
	echo "8 x $contador = ".($contador*8)."\n";
endfor;


// Foreach (para arrays)
$cores = array("Verde","Vermelho", "Azul");

foreach ($cores as $key) {
	echo $key."\n";
}