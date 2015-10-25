<?php 
class user{
	public $nombre;
	public $usuario;
	public $contrasena;
	public $email;

	function guardar(){
		$sql = "INSERT INTO user (nombre,usuario,contrasena,email) VALUES ('{$this->nombre}','{$this->usuario}','{$this->contrasena}','{$this->email}')";
		$con = conexion::get();
		mysqli_query($con, $sql);
	}
}

 ?>