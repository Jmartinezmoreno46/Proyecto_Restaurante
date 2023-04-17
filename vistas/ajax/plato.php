<?php 

require_once "../modulos/plato.php";

$plato=new Plato();

$idplato=isset($_POST["Id_P"])? limpiarCadena($_POST["Id_P"]):"";
$nombreP=isset($_POST["nombrep"])? limpiarCadena($_POST["nombrep"]):"";
$descripcionP=isset($_POST["descripcionp"])? limpiarCadena($_POST["descripcionp"]):"";
$precioP=isset($_POST["preciop"])? limpiarCadena($_POST["preciop"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";


switch($_GET["op"]){
	case 'guardaryeditar':

		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/platos/" . $imagen);
			}
		}
		
		if(!empty($idplato)) {
            $rspta=$plato->editarP($idplato,$nombreP,$descripcionP,$precioP,$imagen);
            echo $rspta? "Plato actualizado" : "Plato no se pudo actualizar";
        } else {
            $rspta=$plato->insertarP($nombreP,$descripcionP,$precioP,$imagen);
            echo $rspta? "Plato registrado" : "Plato no se pudo registrar";
        }
    break;

	case 'mostrar':
		$rspta=$plato->mostrarP($idplato);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'eliminar':
		echo $idplato;
		$rspta=$plato->eliminarP($idplato);
 		//Codificar el resultado utilizando json
 		echo $rspta? "Plato eliminado" : "Plato no se pudo eliminar";
	break;



	case 'listar':
		$rspta=$plato->listarP();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrarP('.$reg->Id_P.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminarP('.$reg->Id_P.')"><i class="fa fa-close"></i></button>',
 				"1"=>$reg->Nombre_P,
 				"2"=>$reg->Descripcion_P,
 				"3"=>$reg->Precio_P,
				"4"=>"<img src='vistas/files/platos/".$reg->imagen."' height='50px' width='50px'>"
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