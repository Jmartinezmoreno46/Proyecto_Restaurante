<?php 

require_once "../modulos/mesa.php";

$mesa=new Mesa();

$idmesa=isset($_POST["Id_Mesa"])? limpiarCadena($_POST["Id_Mesa"]):"";
$nombre=isset($_POST["N_mesa"])? limpiarCadena($_POST["N_mesa"]):"";
$estado=isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";

switch($_GET["op"]){
	case 'disponible':
        $rspta=$mesa->disponible($idmesa);
        echo $rspta? "Mesa Disponible" : "Error? Mesa no Disponible";
        
    break;

	case 'ocupado':
        $rspta=$mesa->ocupado($idmesa);
        echo $rspta? "Mesa Ocupada" : "Error? Mesa no Ocupada";
		
	break;


	case 'listar':
		$rspta=$mesa->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?' <button class="btn btn-danger" onclick="disponible('.$reg->Id_Mesa.')"><i class="fa fa-close"></i></button>':
                                     '<button class="btn btn-success" onclick="ocupado('.$reg->Id_Mesa.')"><i class="fa fa-check"></i></button>',
                "1"=>$reg->N_mesa,
 				"2"=>($reg->estado)?'<span class="label bg-red">Ocupado</span>':'<span class="label bg-green">Disponible</span>',
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