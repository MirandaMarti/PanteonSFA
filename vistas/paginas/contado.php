<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

<div class="container">
	<h2>Ingresa Datos</h2>
	<form action="/action_page.php">
		<div class="form-group">
			<label for="nc">Número Catastral:</label>
			<input type="text" class="form-control" id="NC" placeholder="Clave catastral" name="IngresoNumeroCts" required>
		</div>

		<div class="form-group">
			<label for="corr">Tipo de adquisición:</label>
			<input type="text" class="form-control" id="adquisición" placeholder="Adquisición" name="IngresoTipoAdq" required>
		</div>

		<div class="form-group">
			<label for="nom">Nombre del cliente:</label>
			<input type="text" class="form-control" id="nombre" placeholder="Nombre" name="IngresoNombreCliente" required>
		</div>

		<div class="form-group">
			<label for="dir">Dirección del cliente:</label>
			<input type="text" class="form-control" id="direccion" placeholder="Dirección" name="IngresoDireccionCliente" required>
		</div>

		<div class="form-group">
			<label for="tel">Teléfono del cliente:</label>
			<input type="tel" class="form-control" id="telefono" placeholder="Teléfono" name="IngresoTelefonoCliente" required>
		</div>

		<div class="form-group">
			<label for="corr">Correo del cliente:</label>
			<input type="email" class="form-control" id="correo" placeholder="Correo" name="IngresoCorreoCliente" required>
		</div>

		<div class="d-flex py-5 p-5">
			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="INECliente" name="INECliente" value="INE" required>
				<label for="INE">Copia del INE</label>
			</div>

			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="ComprobanteDomCliente" name="ComprobanteDomCliente" value="Comprobante" required>
				<label for="ComprobanteDom">Copia del comprobante de dommicilio</label>
			</div>

		</div>

		<button type="submit" class="btn btn-primary p-3">Guardar</button>

		<a href="opcionpago.php" class="btn btn-primary p-3" role="button">Regresar</a>

		<br><br><br><br>

	</form>
</div>