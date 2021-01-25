<?php 


	require_once "C:/xampp/htdocs/PanteonSFA/controladores/formularios.controlador.php";


 ?>

 <head>
 	
 	<link rel="stylesheet" href="../../assets/css/style.css">

 </head>



<h3 class="text-center py-3 text-white"> Panteón san Fransisco de asis </h3>

<div class="d-flex justify-content-center text-center">
	
	<form class="p-5 bg-light bg-thc" method="post">

		<div class="form-group">

			<h1>Ingreso</h1>

			<br>

			<label for="email">Correo electrónico:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-envelope"></i></span>
				</div>
					<input type="email" class="form-control" id="emailIngreso" name="ingresoEmail">
			</div>

			
		</div>

		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
				</div>
					<input type="password" class="form-control" id="pwd" name="ingresoPassword">
			</div>

			
		</div>

		<?php 

		$ingreso = new ControladorFormularios();

		$ingreso -> ctrIngreso();

		 ?>

		
		 <br>
		
		<button type="submit" class="btn btn-primary">Ingresar</button>

		<br><br>

		<a class="text-white" href="vistas/paginas/registro.php">Registrate</a>


	</form>

</div>
