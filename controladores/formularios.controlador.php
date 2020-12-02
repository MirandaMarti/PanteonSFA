<?php 

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/
	
	public function ctrRegistro(){

		if(isset($_POST["registroNombre"])){

			echo $_POST["registroNombre"];

		}

	}

	

}

 ?>