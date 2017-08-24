<<?php 
<title>Inicia sesion</title>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form>
					<label style="color: blue"><h4> Introduce el nombre del usuario</h4></label>
					<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre">
					<label style="color: blue"><h4>Contraseña</h4></label>
					<input type="Password" id="password" name="Password" placeholder="Contraseña" class="form-control">
					<br>
					<br>
					<div id="boton" onclick="datos()" class="btn btn-danger btn-block">Enviar</div>
				</form>
			</div>
		</div>
	</div>
		<script type="text/javascript">
		function datos()
		{
			var usuario=document.getElementById('usuario').value;
			var password=document.getElementById('password').value;

			if (usuario=="Yair" && password==1234){
				alert("Bienvenido");
				window.location.href="http://www.google.com/";
				}
				else{
					alert("Nombre del usuario o contraseña es incorrecto");
					window.location.href="Login.php";
		}
		}
	</script>	
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 ?>