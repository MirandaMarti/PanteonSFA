<?php 

require_once "C:/xampp/htdocs/PanteonSFA/modelos/formularios.modelo.php";

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/
	
	static public function ctrRegistro(){

		if(isset($_POST["registroNombre"])){

			$tabla = "administradores";

			$datos = array("nombre" => $_POST["registroNombre"],
							"email" => $_POST["registroEmail"],
							"password" => $_POST["registroPassword"]);


			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	

}

 ?>