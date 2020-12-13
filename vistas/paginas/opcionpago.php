<?php 


require_once "../../controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();



 ?>


<ul class="nav nav-justified py-2 nav-pills">

	<li class="nav item">

		<a class="nav-link " href="opcionpago.php?pagina=contado"> Contado </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="opcionpago.php?pagina=parcial"> Parcialidades </a>

	</li>

	<li class="nav item">

		<a class="nav-link" href="opcionpago.php?pagina=inh"> Inhumación </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="opcionpago.php?pagina=exh"> Exhumación </a>

	</li>
	<li class="nav item">

		<a class="nav-link" href="opcionpago.php?pagina=mant"> Mantenimiento </a>

	</li>

	<li class="nav item">

		<a class="nav-link" href="../../index.php"> Salir </a>

	</li>
</ul>

<?php 

	if(isset($_GET["pagina"])){

			if($_GET["pagina"] == "contado" ||
		       $_GET["pagina"] == "parcial" ||
		   	   $_GET["pagina"] == "inh" ||
		   	   $_GET["pagina"] == "exh" ||
		   	   $_GET["pagina"] == "mant"){

				//include "C:/xampp/htdocs/PanteonSFA2/vistas/paginas/".$_GET["pagina"].".php";

				//include "C:/xampp/htdocs/PanteonSFA2/vistas/paginas/AEP/".$_GET["pagina"].".php";

				header('Location: '.$_GET["pagina"].'.php');

			}

		}

 ?>