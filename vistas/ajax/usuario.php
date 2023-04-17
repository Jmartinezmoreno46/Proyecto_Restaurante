<?php 

require_once "../modulos/usuario.php";


$usuario=new Usuario();

$administrador=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";
$clave=isset($_POST["Pass"])? limpiarCadena($_POST["Pass"]):"";

switch($_GET["op"]){
	case 'verificar':
		$rspta=$usuario->validar($administrador,$clave);

			if (mysqli_num_rows($rspta) > 0) {

				session_start();
				$_SESSION['usuario'] = $administrador;
				header("Location: ../index.php");
			} else {
				echo "ERROR AL INGRESAR";
			}
	break;


}
?>