<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";
require_once "C:/xampp/htdocs/PanteonSFA/controladores/formularios.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

<div class="d-flex justify-content-center text-center py-5">
	
	<form class="p-5 bg-light" method="post">
		
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
					<input type="password" class="form-control" id="pwd" name="registroPassword">
			</div>

			
		</div>


		<?php 

		//$registro = new ControladorFormularios();
		//$registro -> ctrRegistro(); instancia de un metodo no estatico 

		//instancia de un metodo estatico 
		$registro = ControladorFormularios::ctrRegistro();
		
		if($registro == "ok"){

			echo '<script>
			
			if(window.history.replaceState){
				
				window.history.replaceState(null , null, window.location.href);

			}
			

			</script>';

			echo '<div class="alert alert-success">El administrador ha sido registrado </div>';
		}

		?>

		
		<button type="submit" class="btn btn-primary">Registrarse</button>

		<br><br>

		<a class="nav-link" href="../../index.php" class="btn btn-primary"> Ingresa </a>

		


	</form>
</div>