<?php 

require_once "C:/xampp/htdocs/PanteonSFA/modelos/formularios.modelo.php";

class ControladorFormularios{

	/*=============================================
	Registro login
	=============================================*/
	
	static public function ctrRegistroLogin(){

		if(isset($_POST["registroNombre"])){

			$tabla = "administradores";

			$datos = is_array("nombre" -> $_POST["registroNombre"],
							"email" -> $_POST["registroEmail"],
							"password" -> $_POST["registroPassword"]);


			$respuesta = ModeloFormularios::mdlRegistroLogin($tabla, $datos);

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

			
			if(is_array($respuesta) && $respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"] && $_POST["ingresoEmail"] != null && $_POST["ingresoPassword"] != null){


				
				echo '<script>

				if(window.history.replaceState){

					window.history.replaceState(null , null, window.location.href);

				}

				window.location = "vistas/paginas/opcionpago.php";


				</script>';

			}else{


			echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			

			</script>';

			echo '<div class="alert alert-danger">Error al iniciar sesión</div>';

			}
		

			//echo '<pre>'; print_r($respuesta); echo '</pre>'; 

			//var_dump($respuesta);

			

		}


	}

	/*=============================================
	Registro clientes contado
	=============================================*/
	
	static public function ctrRegistroClientesContado(){

		if(isset($_POST["IngresoNumeroCts"])){

			$tabla = "clientescontado";

			$datos = array("numerocat" => $_POST["IngresoNumeroCts"],
						   "tipoadq" => $_POST["IngresoTipoAdq"],
						   "nombrec" => $_POST["IngresoNombreCliente"],
						   "direccionc" => $_POST["IngresoDireccionCliente"],
						   "telefonoc" => $_POST["IngresoTelefonoCliente"],
						   "correoc" => $_POST["IngresoCorreoCliente"]);

			$respuesta = ModeloFormularios::mdlRegistroClientesContado($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Registro clientes parcialidades
	=============================================*/
	
	static function ctrRegistroClientesParcialidades(){

		if (isset($_POST["IngresoNumeroCtsParcial"])) {

			$tabla = "clientesparcialidades";

			$datos = array("numerocat" => $_POST["IngresoNumeroCtsParcial"],
						   "tipoadq" => $_POST["IngresoTipoAdqParcial"],
						   "nombrec" => $_POST["IngresoNombreClienteParcial"],
						   "direccionc" => $_POST["IngresoDireccionClienteParcial"],
						   "telefonoc" => $_POST["IngresoTelefonoClienteParcial"],
						   "correoc" => $_POST["IngresoCorreoClienteParcial"],
						   "nombrea" => $_POST["IngresoNombreAval"],
						   "direcciona" => $_POST["IngresoDireccionAval"],
						   "telefonoa" => $_POST["IngresoTelefonoAval"],
						   "correoa" => $_POST["IngresoCorreoAval"]);
			
			$respuesta = ModeloFormularios::mdlRegistroClientesParcialidades($tabla, $datos);

			return $respuesta;

		}

	}

}

 ?>