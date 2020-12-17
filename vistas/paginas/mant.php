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

 			<input type="text" class="form-control" id="Nomenclatura" placeholder="Ej: 18238ejfgh" name="busquedaNomenclatura">

 		</div>

 		<div class="form-group">

 			<label for="nom">Nombre del propietario:</label>

 			<input type="text" class="form-control" id="NombreDelPropietario" placeholder="Ej: Martin Barcenas Miranda" name="BusquedaPropietario" >

 		</div>

 		<div class="Botones px-5"> 

 			<?php 

 			$ingreso = new ControladorFormularios();

 			$ingreso -> ctrBuscarClientes();

 			?>


 			<button type="submit" class="btn btn-primary">Buscar</button>


 			<a href="opcionpago.php" class="btn btn-primary " role="button">Regresar</a>

 		</div>

	</form>

 </div>	