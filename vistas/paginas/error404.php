<?php 

require_once "C:/xampp/htdocs/PanteonSFA/controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


 ?>


<div class="text-center py-5">
<h1>404</h1>
<p>Página no encontrada</p>

<a href="registro.php" class="btn btn-primary">Volver</a>

</div>