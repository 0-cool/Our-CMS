<?php 
include('libreria/motor.php');
session_start();
if ($_SESSION['usuario']) {
	echo "<script>window.location='our/';</script>";
}
else{
if (!mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME)) {
	echo "<script>window.location='install.php';</script>";
}
if($_POST){
	$user = new user;

	$user->nombre = $_POST['txtNombre'];
	$user->usuario = $_POST['txtUsuario'];
	$user->contrasena = $_POST['txtContrasena'];
	$user->email = $_POST['txtEmail'];
	$user->guardar();
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Our</title>
</head>
<body>
<div class="container">
	<div class="row">
	<div class="page-header">
		<h1>Crea tu usuario.</h1>
	</div>
		<div class="col-md-12">
			<form method="POST" style="width:70%;margin:auto;">
			  <div class="form-group">
			    <label for="">Nombre</label>
			    <input type="text" name="txtNombre" required class="form-control"  placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="">Usuario</label>
			    <input type="text" name="txtUsuario" required class="form-control"  placeholder="Nombre de usuario">
			  </div>
			  <div class="form-group">
			    <label for="">Contraseña</label>
			    <input type="password" name="txtContrasena" required class="form-control" placeholder="Contraseña">
			  </div>
			  <div class="form-group">
			    <label for="">Email</label>
			    <input type="email" name="txtEmail" required class="form-control"  placeholder="Email">
			  </div>
			  <button style="width:100%;" type="submit" class="btn btn-primary">Enviar</button>
			  <label for=""><a href="login.php">Ya tienes cuenta? Inisia Sesion!</a></label>
		</form>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>