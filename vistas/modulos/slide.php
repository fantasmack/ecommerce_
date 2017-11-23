<div class="fila col-10">
	<div id="slider">
		<div class="slides">
			<?php 
			$slide = ControladorSlide::ctrMostrarSlide();
			foreach ($slide as $key => $value) {

				echo '
				<ul class="slider">
				<li class="mascara"></li>
				<li class="descripcion">
				<ul class="texto">
				<li><h1>'.$value["titulo"].'</h1></li>
				<li><h2>'.$value["descripcion"].'</h2></li>
				<li><a href="'.$value["url"].'"><button>Ver producto</button></a></li>
				</ul>
				</li>
				<li class="image"><img width="409" src="http://localhost:8085/ecommerce_/'.$value["img"].'"></li>
				</ul>';
			}
			?>
		</div>
	</div>
	<div class="col-2">
		
	</div>
</div>

