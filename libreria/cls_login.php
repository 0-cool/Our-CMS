<?php 
session_start();
class login{
	public $usuario;
	public $contrasena;

	function loguear(){
		$con = conexion::get();
		$usuario = mysqli_real_escape_string($con,$this->usuario);
		$contrasena = mysqli_real_escape_string($con,$this->contrasena);
		$sel_user = "SELECT * FROM user WHERE usuario = {$usuario} AND contrasena = {$contrasena}";  
		$run_user = mysqli_query($con, $sel_user);
		$check_user = mysqli_num_rows($run_user);
		if($check_user > 0){
			$_SESSION["usuario"]=$usuario;
			echo "<script>window.location='our/';</script>";
		}
		else {
			echo "<script>alert('Usuario o contrasena no es correcta, intentelo de nueo!');</script>";
		}


	}
}

 ?>
