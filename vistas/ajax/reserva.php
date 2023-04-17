<?php 

require_once "../modulos/reserva.php";

$reserva=new Reserva();

$idreserva=isset($_POST["Id_R"])? limpiarCadena($_POST["Id_R"]):"";
$idmesa=isset($_POST["mesa_id"])? limpiarCadena($_POST["mesa_id"]):"";
$nombre=isset($_POST["nombre_cliente"])? limpiarCadena($_POST["nombre_cliente"]):"";
$telefono=isset($_POST["telefono_cliente"])? limpiarCadena($_POST["telefono_cliente"]):"";
$cantidad_p=isset($_POST["cantidad_p"])? limpiarCadena($_POST["cantidad_p"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$hora=isset($_POST["hora"])? limpiarCadena($_POST["hora"]):"";

switch($_GET["op"]){

	case 'guardarR':

        $estado_mesa =$reserva->obtenerEstadoMesa($idmesa);
		
        if ($estado_mesa != 0) {
			echo "La mesa ya está ocupada Por favor seleccione otra mesa";
			  // si la mesa está desocupada, insertar la reserva y actualizar el estado de la mesa
           
        }else {
			  $rspta=$reserva->insertarR($idmesa,$nombre,$telefono,$cantidad_p,$fecha,$hora);
			  $reserva->actualizarEstadoMesa($idmesa); // actualiza el estado de la mesa a ocupada
			  echo $rspta? "reserva realizada con exito" : "reserva no se pudo registrar";
          }
    break;

	case 'mostrarR':
		$rspta=$reserva->mostrarR($idreserva);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'eliminarR':
		 // actualiza el estado de la mesa a ocupada
		 
		$rspta=$reserva->eliminarR($idreserva);
 		//Codificar el resultado utilizando json
 		echo $rspta? "reserva eliminado" : "reserva no se pudo eliminar";
	break;



	case 'listarR':
		$rspta=$reserva->listarR();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-danger" onclick="eliminarR('.$reg->Id_R.')"><i class="fa fa-close"></i></button>',
 				"1"=>$reg->mesa_id,
                "2"=>$reg->nombre_cliente,
 				"3"=>$reg->telefono_cliente,
                "4"=>$reg->cantidad_p,
 				"5"=>$reg->fecha,
 				"6"=>$reg->hora,
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;


}
?>