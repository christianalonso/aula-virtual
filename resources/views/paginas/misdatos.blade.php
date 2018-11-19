<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera_login.css') }}
	{{ HTML::style('css/contenedor.css') }}
	{{ HTML::style('css/menu.css') }}
	{{ HTML::style('css/misdatos.css') }}
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
		   				<div class="campo-dato">
		   					<button class="btn-dato">Confirmar</button>
		   				</div>
		   			</div>

		   			<div class="foto">
		   				<small>foto</small>
		   				<div class="margen-foto">
		   					
		   					<div class="foto-usuario"></div>
		   					<div class="content-agregar">
		   						<div class="agregar">
		   							<label>+</label>
		   						</div>
		   					</div>

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