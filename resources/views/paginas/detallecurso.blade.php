<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera_login.css') }}
	{{ HTML::style('css/pie_pagina.css') }}
	{{ HTML::style('css/contenedor.css') }}
	{{ HTML::style('css/menu.css') }}
	{{ HTML::style('css/detallecurso.css') }}
</head>
<body>
	@include('layout.cabezera_login')
	<div class="contenedor">

   	    <div class="separacion">

   	    	<div class="contenedor-menu">
   	
				@include('layout.menu')

			</div>

			

			<div class="contenedor-items">
		   		<div class="img-login">

		   			<!--{{ HTML::image('images/img1.jpg') }}-->

					<div class="cabezera-informacion">
						<label class="title-informacion">Introduccion - Básico</label>
						<p>informacion del curso modulo por modulo conoceras un poco de..</p>
						<label class="lbl-informacion" for=""><i class="fas fa-circle"></i> Astro</label>
						
					</div>
		   			
		   		</div>

		   		<div class="contenedor-detallecurso">

						<div class="contenedor-cuadrodetalle">

							<div class="bordes">
								<div class="cuadro1">
									<label>¿Qué aprenderas?</label>
									<ul>
										<li><i class="far fa-circle"></i> Punto1</li>
										<li><i class="far fa-circle"></i> Punto2</li>
										<li><i class="far fa-circle"></i> Punto3</li>
									</ul>
								</div>
								<div class="cuadro2">
									<label>¿Qué necesitas saber?</label>
									<ul>
										<li><i class="far fa-circle"></i> Punto1</li>
										<li><i class="far fa-circle"></i> Punto2</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="contenedor-modulo">
							<div class="modulos">
								<ul>
									<li>Modulo 1<i class="fas fa-square-full"></i></li>
									<li>Modulo 2<i class="fas fa-square-full"></i></li>
									<li>Modulo 3<i class="fas fa-square-full"></i></li>
									<li>Modulo 4<i class="fas fa-square-full"></i></li>
									<li>Modulo 5<i class="fas fa-square-full"></i></li>
									<li>Modulo 6<i class="fas fa-square-full"></i></li>
									<li>Modulo 7<i class="fas fa-square-full"></i></li>
									<li>Modulo 8<i class="fas fa-square-full"></i></li>
								</ul>
							</div>
						</div>

				</div>
			</div>

		</div>		

   </div>
   @include('layout.pie_pagina')
	
</body>
</html>