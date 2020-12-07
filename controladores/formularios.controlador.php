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

	/*=============================================
	Ingreso
	=============================================*/

	public function ctrIngreso(){

		if(isset($_POST["ingresoEmail"])){

			$tabla = "administradores";

			$item = "email";

			$valor = $_POST["ingresoEmail"];


			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

			if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]){
				
				echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			
			window.location = "vistas/paginas/menu.php";

			</script>';

			}else{


			echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			

			</script>';

			echo '<div class="alert alert-danger">Error al iniciar sesión</div>';

			}

			echo '<pre>'; print_r($respuesta); echo '</pre>';

			//var_dump($respuesta);

			

		}


	}
	

}

 ?>