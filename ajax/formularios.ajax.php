<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/formularios.controlador.php";
require_once "C:/xampp/htdocs/PanteonSFA/modelos/formularios.modelo.php";

/*=============================================
Clase de ajax
=============================================*/

class AjaxFormularios{

	/*=============================================
	Validar email existente
	=============================================*/
	public $validarEmail;

	public function ajaxValidarEmail(){

		$item = "email";

		$valor = $this->validarEmail;

		 $respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);

		 echo json_encode($respuesta);

	}

}

/*=============================================
Objeto de ajax que recibe la variable POST
=============================================*/

if(isset($_POST["validarEmail"])){

	$valEmail = new AjaxFormularios();
	$valEmail -> validarEmail = $_POST["validarEmail"];
	$valEmail -> ajaxValidarEmail();

}
