<?php 

require_once "C:/xampp/htdocs/PanteonSFA2/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

 <h3 class="text-center py-3"> Inhumación </h3>

<div class="d-flex py-5 p-5">
	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="INEINH" name="INEINH" required>
		<label for="INE">Copia del INE</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="ComprobanteDomINH" name="ComprobanteDomINH" required>
		<label for="ComprobanteDom">Copia del comprobante de dommicilio</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="CertificadoDEf" name="CertificadoDEf" required>
		<label for="INE">Certificado de Defuncion </label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="Perpetuidad" name="Perpetuidad" required>
		<label for="ComprobanteDom">Copia de Perpetuidad</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="OrdenTras" name="OrdenTras" required>
		<label for="ComprobanteDom">Orden de Traslado (Opcional)</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="MantenimientoINH" name="MantenimientoINH" required>
		<label for="ComprobanteDom">Copia del Mantenimiento Actualizado</label>
	</div>
</div>



	<div class="py-5 px-5">
		<a  href="MANT.html">Estastus del mantenimiento </a>
	
</div>


<div class="container-fluid bg-light py-5">

	<div class="container">
		<div>
			<a href="#" class="btn btn-primary" role="button">Generar órden de pago</a>
			<a href="menu.php" class="btn btn-primary" role="button">Regresar</a>
		</div>
	</div>
</div>
