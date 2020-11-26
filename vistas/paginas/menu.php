<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>

<h3 class="text-center py-3"> Panteón san Fransisco de asis </h3>

<ul class="nav nav-justified py-2 nav-pills">

	<li class="nav item">

		<a class="nav-link" href="menu.php?pagina=aep"> Adquisisión de espacio en panteón </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="menu.php?pagina=inh"> Inhumación </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="menu.php?pagina=exh"> Exhumación </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="menu.php?pagina=mant"> Mantenimiento </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="#"> Crematorio </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="#"> Velatorio </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="menu.php?pagina=salir"> Salir </a>

	</li>

</ul>

<?php 

		if(isset($_GET["pagina"])){

			if($_GET["pagina"] == "aep" ||
			   $_GET["pagina"] == "inh" ||
			   $_GET["pagina"] == "exh" ||
			   $_GET["pagina"] == "mant"||
			   $_GET["pagina"] == "salir"){


				header('Location: '.$_GET["pagina"].'.php');


			}

		}

 ?>