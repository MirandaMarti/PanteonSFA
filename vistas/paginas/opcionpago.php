<?php 


require_once "../../controladores/plantilla.controlador.php";

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

 <body class="OP">


<div >

	<li class="nav item">

		<a class="nav-link text-white p-4 fs-g" href="opcionpago.php?pagina=contado"> Contado </a>

	</li>
	<li class="nav item">

		<a class="nav-link text-white p-4 fs-g" href="opcionpago.php?pagina=parcial"> Parcialidades </a>

	</li>

	<li class="nav item">

		<a class="nav-link text-white p-4 fs-g" href="opcionpago.php?pagina=inh"> Inhumación </a>

	</li>
	<li class="nav item">

		<a class="nav-link text-white p-4 fs-g" href="opcionpago.php?pagina=exh"> Exhumación </a>

	</li>
	<li class="nav item">

		<a class="nav-link text-white p-4 fs-g" href="opcionpago.php?pagina=mant"> Mantenimiento </a>

	</li>

	<li class="nav item">

		<a class="nav-link text-white p-4 fs-g" href="../../index.php"> Salir </a>

	</li>

</div>

 </body>

<br><br><br><br><br>

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