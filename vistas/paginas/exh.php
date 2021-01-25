<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

 <head>
	 <!-- plugins de css -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

<!-- plugins de js -->

<!-- jQuery library -->
<script src="../../assets/js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="../../assets/js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../../assets/js/bootstrap.min.js"></script>

<!-- plugins de fa -->

<script src="../../assets/js/fonts.js" crossorigin="anonymus"></script>
 </head>

 <body>
 	

  <h3 class="text-center py-3"> Exhumación </h3>

<div class="d-flex py-5 p-5">
	<div class="form-group p-5">
		<input type="checkbox" id="INEEXH" name="INEEXH" required>
		<label for="INE">Copia del INE</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" id="CertificadoDEfEXH" name="CertificadoDEfEXH" required>
		<label for="INE">Certificado de Defuncion </label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" id="PerpetuidadEXH" name="PerpetuidadEXH" required>
		<label for="ComprobanteDom">Copia de Perpetuidad</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" id="Oficio" name="Oficio" required>
		<label for="ComprobanteDom">Oficio de Coprisem o de la fiscalia</label>
	</div>

	<div class="form-group p-5">
		<input type="checkbox" id="CopiaMatenimientoEXH" name="CopiaMatenimientoEXH" required>
		<label for="ComprobanteDom">Copia del Mantenimiento Actualizado.</label>
	</div>
</div>



	<div class="py-5 px-5">
		<a  href="mant.php">Estatus del mantenimiento </a>
	
</div>


<div class="container-fluid py-5">

	<div class="container">
		<div>
			<a href="../../pdf/ordenpagoexh.php" class="btn btn-primary" role="button">Generar órden de pago</a>
			<a href="opcionpago.php" class="btn btn-primary" role="button">Regresar</a>
		</div>
	</div>
</div>

</body>

<footer class="bd-footer p-3 p-md-5 mt-5 bg-light text-center text-sm-start d-flex justify-content-between">
  <div class="w-50">
    <ul class="bd-footer-links ps-0 mb-3">
      <li class="d-inline-block"><a href="http://temixco.gob.mx/">Sitio Oficial</a></li>

    </ul>
    <p class="mb-0">Designed and built with all the love in the world by Jair Torres & Martin Barcenas <a href="/docs/5.0/about/team/">Bootstrap team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p class="mb-0">Currently v5.0.0-beta1. Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</p>
  </div>
  <div class="w-25"><img src="../../assets/img/logo.png" alt=""></div>
</footer>