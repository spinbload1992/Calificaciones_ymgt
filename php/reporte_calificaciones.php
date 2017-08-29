<?php
require ("fpdf/fpdf.php");
$con= mysql_i_conenect("localhost:8080","calif","web2","calificaciones")){
echo "Error: No se pudo conectar a MySQL." . PHP_EOL. "<br>";