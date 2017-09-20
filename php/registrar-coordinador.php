<?php

 //Variables para la conexión con la base de datos 

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "escuela";
 $tbl_name = "coordinadores";
 
 $form_pass = $_POST['password'];

 // hash utiliza la funcion password_hash y recibe como parametros la contraseña y BCRYPT que es un algoritmo para seguridad de contraseñas
 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 // Esto solo es para vetificar que la conexión se haga correctamente, si no envía mensaje

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 // Aquí hace una consulta para buscar usuarios en la base de datos, para saber si el usuario ya existe o no para así no repetirlos
 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE coordinadores = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);
//Si el usuario ya existe, pedir que se cree otro. 
 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya existe." . "<br />";

 echo "<a href='registrocoordinador.html'>Por favor escoga otro Nombre de usuario</a>";
 } //Si el usuario NO existe entonces se crea y se agrega a la tabla usuarios con el usuario y password
 else{

 $query = "INSERT INTO coordinadores (nombre, password)
           VALUES ('$_POST[username]', '$hash')"; //como se está usando el algoritmo de contraseñas, la contraseña saldrá toda rara y larga
           										  //NOTA: En la tabla de usuarios y el campo contraseñas lo puse de 100 porque la contraseña
           										  //Se hace muy larga aunque en realidad sea de 3 digitos, es por seguridad.

           //Mensajes de la creación correcta o no
 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='logincoordinadores.html'>Login</a>" . "</h5>"; //Si el usuario se crea correctamente sale un mensaje para ir
 																			 //a la pantalla de login
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; //Si no manda un mensaje de error y dice que error es. 
   }
 }
 mysqli_close($conexion);
?>