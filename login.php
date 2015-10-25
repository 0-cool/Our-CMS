<?php 
error_reporting(0);
include('libreria/motor.php');
session_start();
if ($_SESSION['usuario']) {
	echo "<script>window.location='our/';</script>";
}
else{
	if (!mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME)) {
	echo "<script>window.location='install.php';</script>";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
		   	<div class="page-header">
				<h1>Iniciar sesion</h1>
			</div>
				<div class="col-md-12">
			<form method="POST" style="width:70%;margin:auto;">
			  <div class="form-group">
			    <label for="">Usuario</label>
			    <input type="text" name="txtUsuario" required class="form-control"  placeholder="Nombre de usuario">
			  </div>
			  <div class="form-group">
			    <label for="">Contraseña</label>
			    <input type="password" name="txtContrasena" required class="form-control" placeholder="Contraseña">
			  </div>
			  <button style="width:100%;" type="submit" class="btn btn-primary">Enviar</button>
			  <label for=""><a href="index.php">Aun no tienes cuenta? Registrate ya!</a></label>
		</form>
		</div>
	</div>
</body>
</html>
<?php 
if($_POST){
	$login = new login;
	$login->usuario = $_POST['txtUsuario'];
	$login->contrasena = $_POST['txtContrasena'];
	$login->loguear();
}
} ?>