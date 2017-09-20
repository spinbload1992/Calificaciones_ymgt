<?php
require ("fpdf/fpdf.php");
$con= mysql_i_conenect("localhost:8080","calif","web2","calificaciones")){
echo "Error: No se pudo conectar a MySQL." . PHP_EOL. "<br>";
echo "errno de depuración: " .mysqli_connect_errno() . PHP_EOL."<br>";
echo "error de depuración: " .mysqli_connect_error() . PHP_EOL."<br>";
}
$consulta="SELECT usuario.nombre_largo, usuario.id_usuario, calificaciones.calificación, materia.descripcion from usuario, calificaciones, materia WHERE usuario.id_usuario0calificaciones.id_alumno AND calificaciones.id_materia=materia.id_materia";
if ($sentencia = mysqli_prepare ($con, $consulta)){
/*ejercutar la sentencia*/
if (!mysqli_stmt_execute($sentencia)) echo "error 1";

/**/

