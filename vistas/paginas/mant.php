<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";
require_once "C:/xampp/htdocs/PanteonSFA/controladores/formularios.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

 <head>
	 <!-- plugins de css -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="../../assets/css/style.css">

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

 <body class="OP">
 

 <div class="container">

 	<h2 class="text-white">Busqueda</h2>

 	<form method="post">

 		<div class="form-group">

 			<label for="nc" class="text-white">Numero de nomenclatura:</label>

 			<input type="text" class="form-control" id="Nomenclatura" placeholder="Ej: 18238" name="busquedaNomenclatura">

 		</div>

 		<div class="Botones px-5"> 

 			


 			<button type="submit" class="btn btn-primary">Buscar</button>


 			<a href="opcionpago.php" class="btn btn-primary " role="button">Regresar</a>

 			<br><br><br><br>

 			<div class="text-white bg-dark">

 				<strong>
 					
 					<label class="text-gray-dark">Tus datos:</label>

 				</strong>

 				

 				<br><br>
 				
 			<?php 

 			$clientecontado = ControladorFormularios::ctrBuscarClientesContado();

 			?>

 			<br><br>

 			<?php 
 			
 			$clienteparcial = ControladorFormularios::ctrBuscarClientesParcialidades(); 

 			?>

 			</div>

 			

 			

 		</div>

	</form>

 </div>	

 </body>

 <br><br><br><br>

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