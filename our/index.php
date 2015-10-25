<?php
error_reporting(0);
session_start(); 
if ($_SESSION['usuario']) {
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
					<h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
					<h1 style="float:right"><a href="index.php?login=cerrar">Cerrar sesion</a></h1>
				</div>
			</div>
		</div>
	</body>
	</html>
	<?php
	if ($_GET['login']=='cerrar') {
  		session_unset('usuario');
  		session_destroy();
    	echo "<script>window.location='../login.php';</script>";
	}
}
else{
	echo "<script>window.location='../index.php';</script>";}
 ?>
