<?php 

require_once "C:/xampp/htdocs/PanteonSFA2/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

<div class="container">
		<h2>Busqueda</h2>
		<form action="/action_page.php">
			<div class="form-group">
				<label for="nc">Numero de nomenclatura:</label>
				<input type="text" class="form-control" id="Nomenclatura" placeholder="Ej: 18238ejfgh" name="Nomenclatura">
			</div>
			<div class="form-group">
				<label for="nom">Nombre del propietario:</label>
				<input type="text" class="form-control" id="NombreDelPropietario" placeholder="Ej: Martin Barcenas Miranda" name="NombreDelPropietario" required>
			</div>
	</div>		
	</form>		



	<div class="Botones px-5"> 
	<a href="menu.php" class="btn btn-primary " role="button">Regresar</a>

	<a href="#" class="btn btn-primary" role="button">Buscar</a>

	</div>