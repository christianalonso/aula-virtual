<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera_login.css') }}
	{{ HTML::style('css/contenedor.css') }}
	{{ HTML::style('css/cursos.css') }}
	{{ HTML::style('css/menu.css') }}
	{{ HTML::style('css/miscursos.css') }}
	{{ HTML::style('css/contacto_pag.css') }}
	{{ HTML::style('css/pie_pagina.css') }}
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/eventos.js') }}
	<style>
		.mark_miscursos{
			background: #E3A100;
		}
	</style>
</head>
<body>
	 @include('layout.cabezera_login')
	  <div class="contenedor">

   	    <div class="separacion">

   	    	<div class="contenedor-menu">
   	
				@include('layout.menu')

			</div>

			

			<div class="contenedor-items">
		   		

		   			<!--{{ HTML::image('images/img1.jpg') }}-->

					<div class="cabezera-informacion-vacia">
						<div class="title">
							
						</div>
						
					</div>
		   			
		   		

		   		<div class="contenedor-cursodestacado">

					<div class="title-cursodescatado">
						<label for="">MIS CURSOS</label>
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
									<label class="profesor" for=""><i class="fas fa-circle"></i> Prof</label>

									<a href="#" class="precio-curso">Ir al Curso</a>
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
									<a href="#" class="precio-curso">Ir al Curso</a>
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
									<a href="#" class="precio-curso">Ir al Curso</a>
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
									<a href="#" class="precio-curso">Ir al Curso</a>
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
									<a href="#" class="precio-curso">Ir al Curso</a>
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
									<a href="#" class="precio-curso">Ir al Curso</a>
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
									<a href="#" class="precio-curso">Ir al Curso</a>
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
									<a href="#" class="precio-curso">Ir al Curso</a>
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

		</div>		

   </div>
	
</body>
</html>