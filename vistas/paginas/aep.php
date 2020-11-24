<?php 

require_once "C:/xampp/htdocs/PanteonSFA2/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

 <h3 class="text-center py-3"> AEP </h3>

<ul class="nav nav-justified py-2 nav-pills">

	<li class="nav item">

		<a class="nav-link" href="aep.php?pagina=opcionpago"> Cripta tipo 3 </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="aep.php?pagina=opcionpago"> Nicho </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="aep.php?pagina=opcionpago"> Fosa tipo A1 y A2 </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="aep.php?pagina=opcionpago"> Fosa tipo A3 </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="menu.php"> Regresar </a>

	</li>


</ul>

<?php 

	if(isset($_GET["pagina"])){

			if($_GET["pagina"] == "opcionpago"){

				//include "C:/xampp/htdocs/PanteonSFA2/vistas/paginas/".$_GET["pagina"].".php";

				//include "C:/xampp/htdocs/PanteonSFA2/vistas/paginas/AEP/".$_GET["pagina"].".php";

				header('Location: AEP/'.$_GET["pagina"].'.php');

			}

		}

 ?>