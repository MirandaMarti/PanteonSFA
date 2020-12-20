<?php 

require_once "C:/xampp/htdocs/PanteonSFA/modelos/formularios.modelo.php";

class ControladorFormularios{

	/*=============================================
	Registro login
	=============================================*/
	
	static public function ctrRegistroLogin(){

		if(isset($_POST["registroNombre"])){

			$tabla = "administradores";

			$datos = array("nombre" => $_POST["registroNombre"],
							"email" => $_POST["registroEmail"],
							"password" => $_POST["registroPassword"]);


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

 ?>