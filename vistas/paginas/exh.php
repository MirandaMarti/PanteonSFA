<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

<div class="d-flex py-5 p-5">
	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="INEEXH" name="INEEXH" required>
		<label for="INE">Copia del INE</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="CertificadoDEfEXH" name="CertificadoDEfEXH" required>
		<label for="INE">Certificado de Defuncion </label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="PerpetuidadEXH" name="PerpetuidadEXH" required>
		<label for="ComprobanteDom">Copia de Perpetuidad</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="Oficio" name="Oficio" required>
		<label for="ComprobanteDom">Oficio de Coprisem o de la fiscalia</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" class="form-control" id="CopiaMatenimientoEXH" name="CopiaMatenimientoEXH" required>
		<label for="ComprobanteDom">Copia del Mantenimiento Actualizado.</label>
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