<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina 1</title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/cabezera.css') }}
	{{ HTML::style('css/inicio.css') }}
	{{ HTML::style('css/cursos.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/contacto_pag.css') }}
	{{ HTML::style('css/pie_pagina.css') }}
</head>
<body>
	@include('layout.cabezera')

	<div class="contenedor">
		
		<div class="img-inicio">
			
				<!--{{ HTML::image('images/img1.jpg') }}-->

			<div class="title-imginicio">
				<div class="title">
					<label for="">ESTUDIA CON NOSOTROS</label>
				</div>
				<div class="btn-enlace">
					<a href="#">VER TODOS LOS CURSOS</a>
				</div>
				
				
			</div>
			
		</div>

		<div class="contenedor-cursodestacado">

			<div class="title-cursodescatado">
				<label for="">CURSOS DESTACADOS</label>
			</div>

			<div class="caja-cursos">

				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>

				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>
				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>
				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>
				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>
				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>
				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>
				<div class="info-curso">
					<div class="img-curso">
						{{ HTML::image('images/img2.jpg') }}
					</div>
					<div class="text-curso">
						<div class="title-texcurso">
							<label for="">Introducción - Básico</label>
						</div>
						<div class="detalle-curso">
							<label for="" class="profesor"><i class="fas fa-circle"></i> Prof</label>
							<label for="" class="precio-curso"><i class="fas fa-circle"></i><span> a</span>s/ 70</label>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="contenedor-cuadroprofe">

			<div class="cuadro-profesor">
				<div class="cabezera-cuadro-profesor"></div>
				<div class="contenido-cuadro-profesor">
					<div class="contenedor-circle">
						<div class="img-circle">
							{{ HTML::image('images/img2.jpg') }}
						</div>
						<label for="">Profesor</label>
					</div>
					<div class="contenedor-square">
						<div class="img-square">
							{{ HTML::image('images/img2.jpg') }}
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="final">
			@include('layout.contacto_pag')
			@include('layout.pie_pagina')
		</div>

	</div>
</body>
</html>