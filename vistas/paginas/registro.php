<?php 

//require_once "C:/xampp/htdocs/PanteonSFA/ajax/formularios.ajax.php";

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
<script src="assets/js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- plugins de fa -->

<script src="assets/js/fonts.js" crossorigin="anonymus"></script>
 </head>

<body class="THC">
	


<div class="d-flex justify-content-center text-center py-5">
	
	<form class="p-5 bg-light bg-thc" method="post">
		
		<div class="form-group">

			<h1>Registro</h1>

			<br>
			
			<label for="nombre">Nombre completo:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
					<input type="text" class="form-control" id="nombre" name="registroNombre">
			</div>
			
		</div>

		<div class="form-group">
			<label for="email">Correo electrónico:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-envelope"></i></span>
				</div>
					<input type="email" class="form-control" id="email" name="registroEmail">
			</div>

			
		</div>

		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
				</div>
					<input type="password" class="form-control" id="pwdR" name="registroPassword">
			</div>

			
		</div>


		<?php 

		//$registro = new ControladorFormularios();
		//$registro -> ctrRegistro(); instancia de un metodo no estatico 

		//instancia de un metodo estatico 
		$registro = ControladorFormularios::ctrRegistroLogin();
		
		if($registro == "ok"){

			echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			

			</script>';

			echo '<div class="alert alert-success">El administrador ha sido registrado </div>';
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
 		
 		//$prueba = AjaxFormularios::ajaxValidarEmail();

 		//var_dump($prueba);

		 ?>

		
		<button type="submit" class="btn btn-primary">Registrarse</button>

		<br><br>

		<a class="nav-link text-white" href="../../index.php" class="btn btn-primary"> Ingresa </a>

		


	</form>

		<script src="../js/norepeat.js"></script>

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