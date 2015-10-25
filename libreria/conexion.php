<?php

class instancia{
	public $con;
	function __construct(){
		$this->con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die ("<script> window.location='install.php'</script>");
	}
	function __destruct(){
		mysqli_close($this->con);
	}
} 
class conexion{
	public static $instancia = null;

	static function get(){
		if(conexion::$instancia == null){
			conexion::$instancia = new instancia();
		}

			return conexion::$instancia->con;
	}
}

 ?>