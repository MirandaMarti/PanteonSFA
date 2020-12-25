<?php 

require_once "C:/xampp/htdocs/PanteonSFA/modelos/formularios.modelo.php";
//require_once "C:/xampp/htdocs/PanteonSFA/vistas/paginas/ingreso.php";

class ControladorFormularios{

	/*=============================================
	Registro login
	=============================================*/
	
	static public function ctrRegistroLogin(){

		if(isset($_POST["registroNombre"])){

			if(preg_match('/^[a-zA-ZáéíúóÁÉÍÓÚñÑ ]+$/', $_POST["registroNombre"]) && 
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
			   preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroPassword"])){


			$tabla = "administradores";

			$datos = array("nombre" => $_POST["registroNombre"],
							"email" => $_POST["registroEmail"],
							"password" => $_POST["registroPassword"]);


			$respuesta = ModeloFormularios::mdlRegistroLogin($tabla, $datos);

			return $respuesta;

			}else{

				$respuesta = "error";

				return $respuesta;

			}

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

				$actualizarIntentoFallidos = ModeloFormularios::mdlActualizarIntentosFallidos($tabla, 0, $item, $valor);
				
				echo '<script>

				if(window.history.replaceState){

					window.history.replaceState(null , null, window.location.href);

				}

				window.location = "vistas/paginas/opcionpago.php";


				</script>';

			}else{

				if($respuesta["intentos_fallidos"] < 3 ){

				$tabla = "administradores";

				$correo = "email";

				$correoform = $_POST["ingresoEmail"];

				$respuesta = ModeloFormularios::mdlSeleccionarRegistrosIntentos($tabla, $correo, $correoform); 

				$intentos = $respuesta["intentos_fallidos"]+1;

				$item = "email";

				$valor = $_POST["ingresoEmail"];

				$actualizarIntentoFallidos = ModeloFormularios::mdlActualizarIntentosFallidos($tabla, $intentos, $item, $valor);


				}else{

				echo '<script>


				window.location = "vistas/paginas/reestablecer.php";


				</script>';
	

				}

				

				//print_r($intentos);


			echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			

			</script>';

			echo '<div class="alert alert-danger">Error al iniciar sesión, correo o contraseña incorretos</div>';

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

			if(preg_match('/^[0-9]+$/', $_POST["IngresoNumeroCts"]) && 
			   preg_match('/^[0-9a-zA-Z ]+$/', $_POST["IngresoTipoAdq"]) &&
			   preg_match('/^[a-zA-ZáéíúóÁÉÍÓÚñÑ ]+$/', $_POST["IngresoNombreCliente"]) &&
			   preg_match('/^[#,.A-Za-z0-9 ]{5,50}+$/', $_POST["IngresoDireccionCliente"]) &&
			   preg_match('/^[0-9]+$/', $_POST["IngresoTelefonoCliente"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["IngresoCorreoCliente"])){


			$tabla = "clientescontado";

			$datos = array("numerocat" => $_POST["IngresoNumeroCts"],
						   "tipoadq" => $_POST["IngresoTipoAdq"],
						   "nombrec" => $_POST["IngresoNombreCliente"],
						   "direccionc" => $_POST["IngresoDireccionCliente"],
						   "telefonoc" => $_POST["IngresoTelefonoCliente"],
						   "correoc" => $_POST["IngresoCorreoCliente"]);

			$respuesta = ModeloFormularios::mdlRegistroClientesContado($tabla, $datos);

			return $respuesta;

			}else{

				$respuesta = "error";

				return $respuesta;

			}

		}

	}

	/*=============================================
	Registro clientes parcialidades
	=============================================*/
	
	static function ctrRegistroClientesParcialidades(){

		if (isset($_POST["IngresoNumeroCtsParcial"])) {

			if(preg_match('/^[0-9]+$/', $_POST["IngresoNumeroCtsParcial"]) && 
			   preg_match('/^[0-9a-zA-Z ]+$/', $_POST["IngresoTipoAdqParcial"]) &&
			   preg_match('/^[a-zA-ZáéíúóÁÉÍÓÚñÑ ]+$/', $_POST["IngresoNombreClienteParcial"]) &&
			   preg_match('/^[#,.A-Za-z0-9 ]{5,50}+$/', $_POST["IngresoDireccionClienteParcial"]) &&
			   preg_match('/^[0-9]+$/', $_POST["IngresoTelefonoClienteParcial"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["IngresoCorreoClienteParcial"]) &&
			   preg_match('/^[a-zA-ZáéíúóÁÉÍÓÚñÑ ]+$/', $_POST["IngresoNombreAval"]) &&
			   preg_match('/^[#,.A-Za-z0-9 ]{5,50}+$/', $_POST["IngresoDireccionAval"]) &&
			   preg_match('/^[0-9]+$/', $_POST["IngresoTelefonoAval"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["IngresoCorreoAval"])){


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

			}else{

				$respuesta = "error";

				return $respuesta;

			}

		}

	}

	/*=============================================
	Buscar clientes contado
	=============================================*/

	static public function ctrBuscarClientesContado(){

		if (isset($_POST["busquedaNomenclatura"])){

			$tablacontado = "clientescontado";

			$item = "numerocat";

			$valor = $_POST["busquedaNomenclatura"];

			$respuesta = ModeloFormularios::mdlSeleccionarClientesContado($tablacontado, $item, $valor);

			foreach ($respuesta as $key => $value) {


				echo "Tipo de adquisición:  ";
				echo $value["tipoadq"];
				echo"<br>";
				echo"<br>";
				echo "Nombre del cliente:  ";
				echo $value["nombrec"];
				echo"<br>";
				echo"<br>";
				echo "Dirección del cliente:  ";
				echo $value["direccionc"];
				echo"<br>";
				echo"<br>";
				echo "Teléfono del cliente:  ";
				echo $value["telefonoc"];
				echo"<br>";
				echo"<br>";
				echo "Correo del cliente:  ";
				echo $value["correoc"];
				echo"<br>";
				echo"<br>";
				echo "El cliente se registró el día:  ";
				echo $value["fecha"];
				

			}

			//return $respuesta;

			echo '<script>

				if(window.history.replaceState){

					window.history.replaceState(null , null, window.location.href);

				}

				</script>';

			//echo '<pre>'; print_r($respuesta); echo '</pre>';


		}

	}

	/*=============================================
	Buscar clientes parcialidades
	=============================================*/

	static public function ctrBuscarClientesParcialidades(){

		if (isset($_POST["busquedaNomenclatura"])){

			$tablaparcialidades = "clientesparcialidades";

			$item = "numerocat";

			$valor = $_POST["busquedaNomenclatura"];

			$respuesta = ModeloFormularios::mdlSeleccionarClientesParcialidades($tablaparcialidades, $item, $valor);

			foreach ($respuesta as $key => $value) {
				
				echo "Tipo de adquisición:  ";
				echo $value["tipoadq"];
				echo"<br>";
				echo"<br>";
				echo "Nombre del cliente:  ";
				echo $value["nombrec"];
				echo"<br>";
				echo"<br>";
				echo "Dirección del cliente:  ";
				echo $value["direccionc"];
				echo"<br>";
				echo"<br>";
				echo "Teléfono del cliente:  ";
				echo $value["telefonoc"];
				echo"<br>";
				echo"<br>";
				echo "Correo del cliente:  ";
				echo $value["correoc"];
				echo"<br>";
				echo"<br>";
				echo "Nombre del aval:  ";
				echo $value["nombrea"];
				echo"<br>";
				echo"<br>";
				echo "Dirección del aval:  ";
				echo $value["direcciona"];
				echo"<br>";
				echo"<br>";
				echo "Teléfono del aval:  ";
				echo $value["telefonoa"];
				echo"<br>";
				echo"<br>";
				echo "Correo del aval:  ";
				echo $value["correoa"];
				echo"<br>";
				echo"<br>";
				echo "El cliente se registró el día:  ";
				echo $value["fecha"];

			}

			//return $respuesta;

			echo '<script>

				if(window.history.replaceState){

					window.history.replaceState(null , null, window.location.href);

				}

				</script>';

			//echo '<pre>'; print_r($respuesta); echo '</pre>';


		}

	}

}

