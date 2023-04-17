<?php 
//Incluímos inicialmente la conexión a la base de datos

require_once "../configuracion/Conexion.php";

Class Plato
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	
	//Implementamos un método para insertar registros
	public function insertarP($nombreP,$descripcionP,$precioP,$imagen)
	{
		$sql="INSERT INTO plato (Nombre_P,Descripcion_P,Precio_P,imagen)
		VALUES ('$nombreP','$descripcionP','$precioP','$imagen')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editarP($idplato,$nombreP,$descripcionP,$precioP,$imagen)
	{
		$sql="UPDATE plato SET Nombre_P='$nombreP' ,Descripcion_P='$descripcionP' ,Precio_P='$precioP' ,imagen='$imagen' WHERE Id_P='$idplato'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrarP($idplato)
	{
		$sql="SELECT * FROM plato WHERE Id_P='$idplato'";
		//return ejecutarConsulta($sql);
		return ejecutarConsultaSimpleFila($sql);
	}

	public function eliminarP($idplato)
	{
		$sql="DELETE FROM plato WHERE Id_P='$idplato'";
		//return ejecutarConsulta($sql);
		return ejecutarConsulta($sql);
	}


	//Implementar un método para listar los registros

	public function listarP(){
		$sql = "SELECT * FROM plato";
		return ejecutarConsulta($sql);
	}
}

?>