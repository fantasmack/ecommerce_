<!DOCTYPE html>
<html lang="es-LA">
	<head>
		<meta charset="UTF-8">
		<title>Proyecto Ecommerce</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="description" content="Descripción del sitio">
		<?php $favicon = ControladorPlantilla::ctrEstiloPlantilla();
			echo '<link rel="icon" href="http://localhost/ecommerce_/'.$favicon["favicon"].'">';
		 ?>
		<link rel="stylesheet" href="vistas/css/reset.css">
		<link rel="stylesheet" href="vistas/css/main.css">
		<link rel="stylesheet" href="vistas/css/fontello.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<header>
			<?php include "vistas/modulos/cabecera.php"; ?>
		</header>
		<main>
			
		</main>
		<footer>
			
		</footer>
		<script src="vistas/js/jquery.js"></script>
		<script src="vistas/js/main.js"></script>
		<script src="vistas/js/plantilla.js"></script>
	</body>
</html>