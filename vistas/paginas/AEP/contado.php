<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

<div class="container">
	<h2>Ingresa Datos</h2>
	<form action="/action_page.php">
		<div class="form-group">
			<label for="nc">Numero Catasatral</label>
			<input type="text" class="form-control" id="NC" placeholder="la clave catastral" name="NC" >
		</div>
		<div class="form-group">
			<label for="nom">Nombre:</label>
			<input type="text" class="form-control" id="nombreAEP" placeholder="Nombre" name="nombreAEP" required>
		</div>

		<div class="form-group">
			<label for="dir">Direccion:</label>
			<input type="text" class="form-control" id="direccionAEP" placeholder="Direccion" name="direccionAEP" required>
		</div>

		<div class="form-group">
			<label for="tel">Telefono:</label>
			<input type="tel" class="form-control" id="telefonoAEP" placeholder="Telefono" name="telefonoAEP" required>
		</div>

		<div class="form-group">
			<label for="corr">Correo:</label>
			<input type="email" class="form-control" id="correoAEP" placeholder="Correo" name="correoAEP" required>
		</div>

		<div class="form-group">
			<label for="corr">Tipo de adquisición:</label>
			<input type="text" class="form-control" id="adquisiciónAEP" placeholder="<?php ?>" name="correoAEP" required>
		</div>


		<div class="d-flex py-5 p-5">
			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="INEPRropietarioFosa3" name="INEPRropietarioFosa3" required>
				<label for="INE">Copia del INE</label>
			</div>

			<div class="form-group p-5">
				<input type="checkbox" class="form-control" id="ComprobanteDomPropietarioFosa3" name="ComprobanteDomPropietarioFosa3" required>
				<label for="ComprobanteDom">Copia del comprobante de dommicilio</label>
			</div>

		</div>

		<button type="submit" class="btn btn-primary p-3">Guardar</button>

		<a href="opcionpago.php" class="btn btn-primary p-3" role="button">Regresar</a>

		<br><br><br><br>

	</form>
</div>