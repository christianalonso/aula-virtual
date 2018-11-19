<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera_login.css') }}
	{{ HTML::style('css/contenedor.css') }}
	{{ HTML::style('css/menu.css') }}
	{{ HTML::style('css/misnotas.css') }}
	{{ HTML::style('css/pie_pagina.css') }}

</head>
<body>
	@include('layout.cabezera_login')
	<div class="contenedor">

   	    <div class="separacion">

   	    	<div class="contenedor-menu">
   	
				@include('layout.menu')

			</div>

			

			<div class="contenedor-items">
		   		
		   		<div class="notas">
		   			
					<div class="cuadro-notas">

						<label class="title-nota">Mis Notas</label>

						<div class="cabezera-cuadro">
							<label>- Introduccion</label>
							<label>20pts.</label>
						</div>

						<div class="bordes">
							<div class="cuadro-modulo">
								<ul>
									<li>- Modulo 1</li>
									<li>- Modulo 2</li>
									<li>- Modulo 3</li>
									<li>- Modulo 4</li>
									<li>- Modulo 5</li>
									<li>- Modulo 6</li>
									<li>- Modulo 7</li>
									<li>- Modulo 8</li>
									<li>- Modulo 9</li>
									<li>- Modulo 10</li>
									<li>- Modulo 11</li>
									<li>- Modulo 12</li>
								</ul>
							</div>
							<div class="cuadro-puntos">
								<ul>
									<li>20 pts.</li>
									<li>19 pts.</li>
									<li>18 pts.</li>
									<li>17 pts.</li>
									<li>16 pts.</li>
									<li>15 pts.</li>
									<li>14 pts.</li>
									<li>13 pts.</li>
									<li>13 pts.</li>
									<li>13 pts.</li>
									<li>16 pts.</li>
									<li>15 pts.</li>
								</ul>
							</div>
						</div>

					</div>

					<div class="cuadro-cursos-prof">

						<label class="title-nota">Mis Cursos</label>
						<div class="cuadro-cursos">
							<ul>
								<li>Introduccion - Basico</li>
								<li>Introduccion - Intermedio</li>
								<li>Introduccion - Avanzado</li>
							</ul>
						</div>

						<label class="title-nota">Mis Profesores</label>
						<div class="cuadro-prof">
							<ul>
								<li>Profesor 1</li>
								<li>Profesor 2</li>
							</ul>
						</div>

					</div>


		   		</div>

		   		<div class="final">
					
					@include('layout.pie_pagina')
				</div>

			</div>		

   		</div>

   	</div>
</body>
</html>