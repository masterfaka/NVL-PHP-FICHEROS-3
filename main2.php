<?php
//fecha de hoy
date_default_timezone_set('UTC');
$fecha = date("Y-m-d H_i_s");
//var_dump($fecha);
$aux='./'.$fecha;
mkdir("$aux", 0700);
$fichero="doc.txt";
$ficheroCopia="./$aux/".$fichero.".modificado";
copy($fichero, $ficheroCopia);