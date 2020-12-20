<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";
require_once "C:/xampp/htdocs/PanteonSFA/controladores/formularios.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

 <div class="container">

 	<h2>Busqueda</h2>

 	<form method="post">

 		<div class="form-group">

 			<label for="nc">Numero de nomenclatura:</label>

 			<input type="text" class="form-control" id="Nomenclatura" placeholder="Ej: 18238" name="busquedaNomenclatura">

 		</div>

 		<div class="Botones px-5"> 

 			


 			<button type="submit" class="btn btn-primary">Buscar</button>


 			<a href="opcionpago.php" class="btn btn-primary " role="button">Regresar</a>

 			<br><br><br><br>

 			<?php 

 			$clientecontado = ControladorFormularios::ctrBuscarClientesContado();

 			?>

 			<br><br>

 			<?php 
 			
 			$clienteparcial = ControladorFormularios::ctrBuscarClientesParcialidades(); 

 			?>

 			

 		</div>

	</form>

 </div>	