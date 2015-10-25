<?php 
error_reporting(0);
session_start();
class user{
	public $nombre;
	public $usuario;
	public $contrasena;
	public $email;

	function guardar(){
		$sql = "INSERT INTO user (nombre,usuario,contrasena,email) VALUES ('{$this->nombre}','{$this->usuario}','{$this->contrasena}','{$this->email}')";
		$con = conexion::get();
		mysqli_query($con, $sql);
		$_SESSION["usuario"] = $this->usuario;
		$_SESSION["nombre"]=$this->nombre;
		$_SESSION["email"]=$this->email;
		echo "<script>window.location='our/';</script>";
	}
}

 ?>