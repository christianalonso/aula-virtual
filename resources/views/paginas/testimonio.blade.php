<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera.css') }}
	{{ HTML::style('css/inicio.css') }}
	{{ HTML::style('css/testimonio.css') }}
</head>
<body>
	@include('layout.cabezera')

	<div class="contenedor">
		
		<div class="img-inicio">
			
				<!--{{ HTML::image('images/img1.jpg') }}-->

			<div class="title-imgtestimonio">
				<div class="title-testimonio">
					<label>MAS QUE UNA EMPRESA, SOMOS UNA COMUNIDAD</label>
				</div>
				<div class="enlace-testimonio">
					<a class="btn-tipoenlace" href="#">Comparte tu testimonio</a>
				</div>
			</div>
			
		</div>

		<div class="contenedor-testimonio">
			
				<div class="title-items">
					<label>Testimonios</label>
				</div>
				
				<div class="contenedor-cajas">
					
					<div class="caja-testimonio">
						
						<div class="testimonio">
							<label for="">Jose Antonio Muños Torres</label>
							<p>Excelentes cursos, excelentes profesores</p>
							<div class="circulo"></div>
						</div>

					</div>
					<div class="caja-testimonio">
						
						<div class="testimonio">
							<label for="">Jose Antonio Muños Torres</label>
							<p>Excelentes cursos, excelentes profesores</p>
							<div class="circulo"></div>
						</div>


					</div>
					<div class="caja-testimonio">
						
						<div class="testimonio">
							<label for="">Jose Antonio Muños Torres</label>
							<p>Excelentes cursos, excelentes profesores</p>
							<div class="circulo"></div>
						</div>

					</div>
					<div class="caja-testimonio">
						
						<div class="testimonio">
							<label for="">Jose Antonio Muños Torres</label>
							<p>Excelentes cursos, excelentes profesores</p>
							<div class="circulo"></div>
						</div>

					</div>

		

			
				</div>

		</div>

	</div>

</body>
</html>