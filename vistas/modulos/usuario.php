<?php 
//Incluímos inicialmente la conexión a la base de datos

require_once "../configuracion/Conexion.php";

Class Usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	
	//Implementamos un método para insertar registros
	public function insertar($usuario,$clave)
	{
		$sql="INSERT INTO administrador (usuario,clave)
		VALUES ('$usuario','$clave')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($Id_usuario,$usuario,$clave)
	{
		$sql="UPDATE administrador SET usuario='$usuario' ,clave='$clave'";
		return ejecutarConsulta($sql);
	}
	//Implementar un método para listar los registros

	public function validar($usuario,$clave)
	{
		$sql = "SELECT * FROM administrador WHERE usuario = '$usuario' AND clave = '$clave'";
		return ejecutarConsulta($sql);
	}

	public function listar(){
		$sql = "SELECT * FROM usuario";
		return ejecutarConsulta($sql);
	}
}

?>