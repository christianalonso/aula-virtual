<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera_login.css') }}
	{{ HTML::style('css/contenedor.css') }}
	{{ HTML::style('css/login.css') }}
	{{ HTML::style('css/cursos.css') }}
	{{ HTML::style('css/menu.css') }}
	{{ HTML::style('css/contacto_pag.css') }}
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
		   		<div class="img-login">

		   			<!--{{ HTML::image('images/img1.jpg') }}-->

					<div class="title-imglogin">
						<div class="title">
							<label for="">BIENVENIDO A ASTROVISION</label>
						</div>
						
					</div>
		   			
		   		</div>

		   		<div class="contenedor-cursodestacado">

					<div class="title-cursodescatado">
						<label for="">CURSOS</label>
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
				<div class="final">
					@include('layout.contacto_pag')
					@include('layout.pie_pagina')
				</div>
			</div>

		</div>		

		

   </div>

</body>
</html>