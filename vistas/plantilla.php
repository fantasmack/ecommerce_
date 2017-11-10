<!DOCTYPE html>
<html lang="es-LA">
<head>
	<meta charset="UTF-8">
	<title>Proyecto Ecommerce</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="description" content="Descripción del sitio">
	<?php $favicon = ControladorPlantilla::ctrEstiloPlantilla();
	echo '<link rel="icon" href="http://localhost/ecommerce_/'.$favicon["favicon"].'">';
	$url = Ruta::ctrRuta();
	?>
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/reset.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/main.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<header>
		<?php include "modulos/cabecera.php";
/*CONTENIDO DINÁMICO */

$rutas = array();
$ruta = null;

if(isset($_GET["ruta"])){
	$rutas = explode("/", $_GET["ruta"]);
	$item = "ruta";
	$valor =  $rutas[0];
	/* URL'S AMIGABLES DE CATEGORÍAS */
	$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
	if($rutas[0] == $rutaCategorias["ruta"]){
		$ruta = $rutas[0];
	}

	/* URL'S AMIGABLES DE SUBCATEGORÍAS */

	$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
	foreach ($rutaSubCategorias as $key => $value) {
		if($rutas[0] == $value["ruta"]){
			$ruta = $rutas[0];
		}
	}
	if($ruta != null){
		include "modulos/productos.php";
	}else{
		include "modulos/error404.php";
	}
	}
	?>
	</header>
	<main>

	</main>
	<footer>

	</footer>
	<script src="<?php echo $url; ?>vistas/js/jquery.js"></script>
	<script src="<?php echo $url; ?>vistas/js/main.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
</body>
</html>