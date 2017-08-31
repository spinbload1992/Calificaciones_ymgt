<?php
function menu (){
	if($_SESSION['login']){
		if($_SESSION['tipo_usuario']=1){
			echo "<li><a href='php'Usuarios<a/></li>
			<li><a href='otro.php'> Reportes </li> <li><a ref='calific.php'Calificaciones</a></li>";

		} else {
			echo "<li><a href='otro.php'> Mis calificaciones</a></li><li><a href='perfil.php'> Mi perfil </a></li>";
		}
	} else {
		echo "debes loguearte";
	}
}
?>








<?php
requiere ("funciones.php");
session_start();
$_SESSION['login']=1;
$_SESSION['tipo_usario']=1;
echo "<ul>";
menu();
echo "</ul>";
?>