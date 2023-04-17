<?php 
//Incluímos inicialmente la conexión a la base de datos

require_once "../configuracion/Conexion.php";

Class Mesa
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	
	//Implementamos un método para insertar registros
	public function insertar($nombre,$estado)
{
    $sql="INSERT INTO mesa (N_mesa,estado)
    VALUES ('$nombre','$estado')";
    return ejecutarConsulta($sql);
}

	public function eliminar($idmesa)
	{
		$sql="DELETE FROM mesa WHERE Id_Mesa='$idmesa'";
		//return ejecutarConsulta($sql);
		return ejecutarConsulta($sql);
	}


	//Implementar un método para listar los registros

	public function listar(){
		$sql = "SELECT * FROM mesa";
		return ejecutarConsulta($sql);
	}


    public  function disponible($idmesa) {
        $sql = "UPDATE mesa SET estado='0'  WHERE Id_Mesa = '$idmesa'";
        return ejecutarConsulta($sql);
        
    }

    public function ocupado($idmesa){
        $sql = "UPDATE mesa SET estado='1'  WHERE Id_Mesa = '$idmesa'";
        return ejecutarConsulta($sql);
    }
    
}

?>