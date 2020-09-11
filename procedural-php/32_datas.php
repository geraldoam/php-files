<?php

/* Datas */
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');

echo "<hr>";

/* Normal */
$date = date('Y-m-d'); /* To save in database */
/* Date and Time */
$datetime = date('Y-m-d H:i:s'); /* To save in database */


/* Time */ 
$time = time();
echo date('d/m/Y', $time);

echo "<hr>";

/* Mktime */
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m - h:i', $data_pagamento);

echo "<hr>";

/* strtotime */
$data = '2019-05-10 H:i:s'; /* From database */ 
$data = strtotime($data);

echo date('d/m/Y', $data);