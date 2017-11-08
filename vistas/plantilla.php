<!DOCTYPE html>
<html lang="es-LA">
	<head>
		<meta charset="UTF-8">
		<title>Proyecto Ecommerce</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
			<?php include "vistas/modulos/cabecera.php";?>
		</header>
		<main>
			<?php 		
				$rutas = array();
					if(isset($_GET["ruta"])){
						$rutas = explode("/",$_GET["ruta"]);

						$rutaCategorias = ControladorPlantilla
				} 

			?>
		</main>
		<footer>
			
		</footer>
		<script src="<?php echo $url; ?>vistas/js/jquery.js"></script>
		<script src="<?php echo $url; ?>vistas/js/main.js"></script>
		<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
	</body>
</html>