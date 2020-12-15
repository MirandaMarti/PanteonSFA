<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

?>

<div class="container">
	<h2>Ingresa Datos</h2>
	<form action="/action_page.php">
		<div class="form-group">
			<label for="nc">Número catastral:</label>
			<input type="text" class="form-control" id="NC" placeholder="Clave catastral" name="IngresoNumeroCtsParcial">
		</div>

		<div class="form-group">
			<label for="nc">Tipo de adquisición:</label>
			<input type="text" class="form-control" id="NC" placeholder="Adquisición" name="IngresoTipoAdqParcial">
		</div>

		<div class="form-group">
			<label for="nom">Nombre:</label>
			<input type="text" class="form-control" id="nombreParcialAEP" placeholder="Nombre" name="IngresoNombreClienteParcial" required>
		</div>

		<div class="form-group">
			<label for="dir">Dirección:</label>
			<input type="text" class="form-control" id="direccionParcialAEP" placeholder="Direccion" name="IngresoDireccionClienteParcial" required>
		</div>

		<div class="form-group">
			<label for="tel">Teléfono:</label>
			<input type="tel" class="form-control" id="telefonoPArcialAEP" placeholder="Telefono" name="IngresoTelefonoClienteParcial" required>
		</div>

		<div class="form-group">
			<label for="corr">Correo:</label>
			<input type="email" class="form-control" id="correoAEP" placeholder="Correo" name="IngresoCorreoClienteParcial" required>
		</div>

		<h2>Ingresa datos del aval</h2>

		<div class="form-group">
			<label for="nom">Nombre del aval:</label>
			<input type="text" class="form-control" id="nombreAvalAEP" placeholder="Nombre" name="IngresoNombreAval" required>
		</div>

		<div class="form-group">
			<label for="dir">Direccion del aval:</label>
			<input type="text" class="form-control" id="direccionAvalAEP" placeholder="Direccion" name="IngresoDireccionAval" required>
		</div>

		<div class="form-group">
			<label for="tel">Telefono del aval:</label>
			<input type="tel" class="form-control" id="telefonoAvalAEP" placeholder="Telefono" name="IngresoTelefonoAval" required>
		</div>


		<div class="form-group">
			<label for="corr">Correo del aval:</label>
			<input type="email" class="form-control" id="correoAEPAval" placeholder="Correo" name="IngresoCorreoAval" required>
		</div>

		<div class="d-flex py-5 p-5">
			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="INEParcialFosa3" name="INEParcialFosa3" required>
				<label for="INE">Copia del INE</label>
			</div>

			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="ComprobanteDomParcialFosa3" name="ComprobanteDomParcialFosa3" required>
				<label for="ComprobanteDom">Copia del comprobante de dommicilio</label>
			</div>

			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="INEAvalFosa3" name="INEAvalFosa3" required>
				<label for="INE">Copia del INE del Aval</label>
			</div>

			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="ComprobanteDomAvalFosa3" name="ComprobanteDomAvalFosa3" required>
				<label for="ComprobanteDom">Copia del comprobante de dommicilio del Aval</label>
			</div>
		</div>


		<?php 

		//“CONTRATO DE COMPRA-VENTA DE CRIPTA PARCIALIDADES al guardar un cliente

		 ?>

		<button type="submit" class="btn btn-primary">Guardar</button>

		<a href="opcionpago.php" class="btn btn-primary" role="button">Regresar</a>
	</form>
</div>