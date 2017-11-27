<div class="fila">
	<div class="col-10">
		<div id="slider">
			<div class="slides">
				<?php 
				$servidor = Ruta::ctrRutaServidor();
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
					<li class="image"><img width="409" src="'.$servidor.$value["img"].'" alt="'.$value["alt"].'"></li>
					</ul>';
				}
				?>
			</div>
		</div>

	</div>
	<div id="destacados" class="col-2">
		<article>
			<ul>
				<li><h2>Nerdos</h2></li>
				<li><img src="http://localhost:8085/bck_ecommerce_/vistas/img/productos/destacado_1.png" alt=""></li>
				<li><p>Estos son los mismisimos de Clark Kent</p></li>
				<li><a href="#">
					<button>Ver Producto</button>
				</a></li>
			</ul>
		</article>	
		<article>
			<ul>
				<li><h2>Nerdos</h2></li>
				<li><img src="http://localhost:8085/bck_ecommerce_/vistas/img/productos/destacado_1.png" alt=""></li>
				<li><p>Estos son los mismisimos de Clark Kent</p></li>
				<li><a href="#">
					<button>Ver Producto</button>
				</a></li>
			</ul>
		</article>	
		<article>
			<ul>
				<li><h2>Nerdos</h2></li>
				<li><img src="http://localhost:8085/bck_ecommerce_/vistas/img/productos/destacado_1.png" alt=""></li>
				<li><p>Estos son los mismisimos de Clark Kent</p></li>
				<li><a href="#">
					<button>Ver Producto</button>
				</a></li>
			</ul>
		</article>	
		<article>
			<ul>
				<li><h2>Nerdos</h2></li>
				<li><img src="http://localhost:8085/bck_ecommerce_/vistas/img/productos/destacado_1.png" alt=""></li>
				<li><p>Estos son los mismisimos de Clark Kent</p></li>
				<li><a href="#">
					<button>Ver Producto</button>
				</a></li>
			</ul>
		</article>			
	</div>
</div>