<?php 
error_reporting(0);
if ($_POST) {
	$DB_HOST = $_POST['DB_HOST'];	
	$DB_USER = $_POST['DB_USER'];	
	$DB_PASS = $_POST['DB_PASS'];	
	$DB_NAME = $_POST['DB_NAME'];	

	$con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS) or die("<script>alert('Revise la configuarion, tiene problemas.');window.location='install.php';</script>");
	mysqli_query($con, "drop {$DB_NAME}");
	mysqli_query($con, "create database {$DB_NAME}");
	mysqli_query($con, "use {$DB_NAME}");
	mysqli_query($con, "CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");

	$config = "<?php
		define('DB_HOST', '{$DB_HOST}');
		define('DB_NAME', '{$DB_NAME}');
		define('DB_USER', '{$DB_USER}');
		define('DB_PASS', '{$DB_PASS}');
		?>";
		file_put_contents('libreria/config.php', $config);
		echo "<script>window.location = './';</script>";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>OUR</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header">
				<h3>Configurar el sistema.</h3>
			</div>
			<div class="col-md-12">
				<form method="POST" style="width:70%;margin:auto;">
				  <div class="form-group">
				    <label for="">Servidor</label>
				    <input type="text" name="DB_HOST" required  class="form-control"  placeholder="Ej: localhost">
				  </div>
				  <div class="form-group">
				    <label for="">Base de datos</label>
				    <input type="text" name="DB_NAME" required class="form-control"  placeholder="Ej: dbName">
				  </div>
				  <div class="form-group">
				    <label for="">Usuario</label>
				    <input type="text" name="DB_USER" required class="form-control"  placeholder="Ej: root">
				  </div>
				  <div class="form-group">
				    <label for="">Contraseña</label>
				    <input type="text" name="DB_PASS" class="form-control"  placeholder="Ej: ****">
				  </div>
				  <button style="width:100%;" onclick="return confirm('Si no existe la base de datos se creara, si existe destruira todos los datos y se recreara.')" type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>