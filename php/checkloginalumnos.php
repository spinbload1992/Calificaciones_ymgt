<?php
session_start(); //Empieza la sesión
?>

<?php
 //La conexión con la base de datos
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "escuela"; //así se lama mi base
$tbl_name = "alumnos"; 

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 //Revisa si la conexión se hace correctamente
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM $tbl_name WHERE nombre = '$username'"; //Busca el usuario que ya se encuentra en la base para revisar si es el correcto

$result = $conexion->query($sql);


//if ($result->num_rows > 0) {     //aquí quería checar algo, porque mi tabla solo tiene Usuario y Password, no le puse id xDD
// }

 //Aquí muestra la pantalla de que esta todo correcto a la cual solo se puede acceder si se inicio sesión correctamente
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (60 * 60 * 60);

    echo "Bienvenido! " . $_SESSION['username'];

    echo "<br><br><script> location.href='principalalumno.html'</script>"; //Te lleva al panel de control del usuario, panel que solo se muestra si se inicio sesión bien

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><script> location.href='loginalumnos.html'</script>"; //de vuelta al login para iniciar sesión si se hizo mal
 }
 mysqli_close($conexion); 
 ?>