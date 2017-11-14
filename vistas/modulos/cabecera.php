<header>
<a class="icon-menu" href="#"></a>
<div id="wrap_menu">
	<div class="fila top flex aling_center">
		<div class="col-2">
			<ul class="flex">
				<li class="icon-globe"></li>
				<li><a href="#">En |</a></li>
				<li><a href="#"> Es</a></li>
				<?php 
					/*Editar las redes sociales*/
				$social= ControladorPlantilla::ctrEstiloPlantilla();
				$jsonRedes = json_decode($social["redes_sociales"],true);
				foreach ($jsonRedes as $key => $value) {
					echo '<li><a class="'.$value["red"].'" href="'.$value["url"].'" target="_blank"></a></li>';
				}
			 		/*Editar las redes sociales*/
				?>
			</ul>
		</div>
		<div class="col-8">
			<p></p>
		</div>
		<div class="col-2">
			<ul class="flex j_end">
				<li><a href="#">Ingresar |</a></li>
				<li><a href="#">Registrarse</a></li>
			</ul>
		</div>
	</div>
	<div class="fila menu flex align_center">
		<div class="col-2">
			<a href="#">
				<img src="http://localhost:8085/ecommerce_/<?php echo $social["logo"] ?>" width="43" alt="tienda">
			</a>
		</div>
		<div class="col-8">
			<nav class="navegacion">
				<ul class="flex">
					<li><a href="#" title="Vista">Vista</a></li>
					<li><a href="#" title="Solares">Solares</a></li>
					<li><a href="#" title="Hombre">Hombre</a></li>
					<li><a href="#" title="Mujer">Mujer</a></li>
					<li><a href="#" title="Niños">Niños</a></li>
					<li><a href="#" title="Probar">Probar</a></li>
					<li><a href="#" title="Contacto">Contacto</a></li>
				</ul>
			</nav>

		</div>
		<div class="col-2 carro flex">
			<label class="narticulos">2</label>
			<ul class="flex">
				<li><a class="icon-shop" href="#"></a></li>
				<li> | </li>
				<li>
					<div id="buscar">
						<form action="#">
							<input id="search" name="search" type="text" placeholder="Que estas buscando ?">
							<input id="search_submit" value="" type="submit">
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div id="btncategorias">
	<i class="icon-down-dir" onclick="toggle('categorias');"></i>
</div>
<div id="categorias">
	<div class="contenedor flex j_space">
	<?php
		$item = null;
		$valor = null;
		$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
		foreach ($categorias as $key => $value) {
			echo '<div class="col-4">
			<a href="'.$value["ruta"].'"><h3>'.$value["categoria"].'</h3></a> 
			<ul>';
			$item = "id_categoria";
			$valor = $value["id"];
			$subcategorias = ControladorProductos::ctrMostrarSubcategorias($item, $valor);

			foreach ($subcategorias as $key => $value) {
				echo '<li><a href="'.$value["ruta"].'">'.$value['subcategoria'].'</a></li>';
			}
			echo'</ul>
			</div>';
		}
	?>
	</div>
</div>
</header>

