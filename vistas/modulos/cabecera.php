
<a class="icon-menu" href="#"></a>
<div id="wrap_menu">
	<div class="fila top flex aling_center">
		<div class="col-2">
			<ul class="flex">
				<span class="icon-globe"></span>
				<li><a href="#">En |</a></li>
				<li><a href="#"> Es</a></li>
				<?php 
					//Editar las redes sociales
						$social= ControladorPlantilla::ctrEstiloPlantilla();
						$jsonRedes = json_decode($social["redes_sociales"],true);
						foreach ($jsonRedes as $key => $value) {
						echo '<li><a class="'.$value["red"].'" href="'.$value["url"].'" target="_blank"></a></li>';
						}
			 		//Editar las redes sociales
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
					<li><a href="#">vista</a></li>
					<li><a href="#">solares</a></li>
					<li><a href="#">hombre</a></li>
					<li><a href="#">mujer</a></li>
					<li><a href="#">niños</a></li>
					<li><a href="#">probar</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>

		</div>
		<div class="col-2 carro flex">
			<ul class="flex">
				<li><a href="#"><span class="icon-shop"></span></a></li>
				<span> | </span>
				<li>
					<div id="buscar">
						<form action="">
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
	<span class="icon-down-dir" onclick="toggle('categorias');"></span>
</div>
<div id="categorias">
	<div class="contenedor flex j_space">
		<?php 
			$categorias = ControladorProductos::ctrMostrarCategorias();
			foreach ($categorias as $key => $value) {
				echo 
				'<div class="col-4">
				<a href="'.$value["ruta"].'"><h3>'.$value["categoria"].'</h3></a> 
				<ul>';
				$subcategorias = ControladorProductos::ctrMostrarSubcategorias($value["id"]);

				foreach ($subcategorias as $key => $value) {
					echo '<li><a href="'.$value["ruta"].'">'.$value['subcategoria'].'</a></li>';
				}
					echo'</ul>
				</div>';
			}
		?>
	</div>
</div>

