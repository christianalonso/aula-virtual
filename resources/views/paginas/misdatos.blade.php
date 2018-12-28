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
	{{ HTML::style('css/menu.css') }}
	{{ HTML::style('css/misdatos.css') }}
	{{ HTML::style('css/pie_pagina.css') }}
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/eventos.js') }}
</head>
<body>
	@include('layout.cabezera_login')
	<div class="contenedor">

   	    <div class="separacion">

   	    	<div class="contenedor-menu">
   	
				@include('layout.menu')

			</div>

			

			<div class="contenedor-items">
		   		
		   		<div class="datos">
		   			
		   			<div class="campos">
		   				<label class="title-datos">Mis Datos :</label>

		   				<div class="campo-dato">
		   					<label>Nombre</label>
		   					<input class="txt-dato" type="text">
		   				</div>
		   				<div class="campo-dato">
		   					<label>Apellido</label>
		   					<input class="txt-dato" type="text">
		   				</div>
		   				<div class="campo-dato">
		   					<label>Correo</label>
		   					<input class="txt-dato" type="text">
		   				</div>
		   				<div class="campo-dato">
		   					<label>Contraseña</label>
		   					<input class="txt-dato" type="text">
		   				</div>
		   				<div class="campo-dato">
		   					<label>Dirección</label>
		   					<input class="txt-dato" type="text">
		   				</div>
		   				
		   			</div>

		   			<div class="foto">
		   				<small>foto</small>
		   				<div class="margen-foto">
		   					
		   					<div class="foto-usuario" id="preview">
		   						{{ HTML::image('images/img2.jpg') }}
		   					</div>
		   					<div class="content-agregar">
		   						<div class="agregar">
		   							<label>+</label>
		   							<input type="file" title="agregar foto" cursor="pointer" id="subir_foto">
		   						</div>
		   					</div>

		   				</div>
		   				<div class="campo-dato">
		   					<button class="btn-dato">Confirmar</button>
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