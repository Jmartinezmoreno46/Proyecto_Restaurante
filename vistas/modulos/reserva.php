<?php 
//Incluímos inicialmente la conexión a la base de datos

require_once "../configuracion/Conexion.php";

Class Reserva
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	
	//Implementamos un método para insertar registros
	public function insertarR($mesa_id,$nombre,$telefono,$cantidad_p,$fecha,$hora)
	{
		$sql="INSERT INTO reservas (mesa_id,nombre_cliente,telefono_cliente,cantidad_p,fecha,hora)
		VALUES ('$mesa_id','$nombre','$telefono','$cantidad_p','$fecha','$hora')";
		return ejecutarConsulta($sql);
	}

	public function eliminarR($reserva_id)
	{
		$sql="DELETE FROM reservas WHERE Id_R='$reserva_id'";
		//return ejecutarConsulta($sql);
		return ejecutarConsulta($sql);
	}


	//Implementar un método para listar los registros

	public function listarR(){
		$sql = "SELECT * FROM reservas";
		return ejecutarConsulta($sql);
	}




	// public function obtenerEstadoMesa($mesa_id) {
	// 	// Realizamos la consulta para obtener el estado de la mesa
	// 	$sql = "SELECT estado FROM mesa WHERE Id_Mesa = '$mesa_id'";
	// 	$resultado = $this->conexion->query($sql);
	
	// 	if ($resultado->num_rows == 1) {
	// 		$fila = $resultado->fetch_assoc();
	// 		$estado = $fila["estado"];
	
	// 		switch ($estado) {
	// 			case 'disponible':
	// 				return 0;
	// 			case 'ocupada':
	// 				return 1;
	// 		}
	// 	} else {
	// 		return null;
	// 	}
	// }
    public  function obtenerEstadoMesa($mesa_id) {
        // Realizamos la consulta para obtener el estado de la mesa
        $sql = "SELECT estado FROM mesa WHERE Id_Mesa = '$mesa_id'";
        $resultado = ejecutarConsultaSimpleFila($sql);
		return $resultado['estado'];
		
    }



    public function actualizarEstadoMesa($mesa_id){
        $sql = "UPDATE mesa SET estado='1'  WHERE Id_Mesa = '$mesa_id'";
        return ejecutarConsulta($sql);
    }

    
}

?>