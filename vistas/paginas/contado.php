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


<div class="container">
	<h2>Ingresa datos de cliente contado</h2>
	<form method="post">

		<div class="form-group">
			<label for="nc">Número Catastral:</label>
			<input type="text" class="form-control" id="NC" placeholder="Clave catastral" name="IngresoNumeroCts" required>
		</div>

		<div class="form-group">
			<label for="corr">Tipo de adquisición:</label>
			<input type="text" class="form-control" id="adquisición" placeholder="Adquisición" name="IngresoTipoAdq" required>

			<?php 

			//Cripta tipo 3, Nicho, Fosa tipo A1 y A2, Fosa tipo A3

			 ?>
			
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
				<input type="checkbox" id="INECliente" name="INECliente" required>
				<label for="INE">Copia del INE</label>
			</div>

			<div class="form-group p-5">
				<input type="checkbox" id="ComprobanteDomCliente" name="ComprobanteDomCliente" required>
				<label for="ComprobanteDom">Copia del comprobante de dommicilio</label>
			</div>

		</div>

		<?php 

		//$registro = new ControladorFormularios();
		//$registro -> ctrRegistro(); instancia de un metodo no estatico 

		//instancia de un metodo estatico 
		$registro = ControladorFormularios::ctrRegistroClientesContado();
		
		if($registro == "ok"){

			echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			

			</script>';

			echo '<div class="alert alert-success"> El cliente ha sido guardado </div>';
		}

		if($registro == "error"){

			echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			

			</script>';

			echo '<div class="alert alert-danger">No se permiten caracteres especiales </div>';

		}

		?>

		<?php 

		//EL “CONTRATO DE COMPRA-VENTA DE CRIPTA CONTADO al guardar la información

		 ?>

		<button type="submit" class="btn btn-primary p-3">Guardar</button>

		<a href="opcionpago.php" class="btn btn-primary p-3" role="button">Regresar</a>

		<a class="btn btn-danger p-3" href="../../pdf/contratocompraventacontado.php">Generar PDF</a>

		<br><br><br><br>



	</form>
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