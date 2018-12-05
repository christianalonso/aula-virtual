<div class="contenedor-cabezera">
	
	<div class="cabezera">
		<div class="logo">
			<div class="img-logo">
				{{ HTML::image('images/img2.jpg') }}
			</div>
		</div>
		<div class="items">
				
				<a href="#">Inicio</a>
				<a href="#">Curso</a>
				<a href="#">¿Quienes Somos?</a>
				<a href="#">Testimonio</a>
				<a href="#" id="abrir_cajasesion">Iniciar Sesión</a>
				<div class="icono-abrir">
					<i id="abrir_menu" class="fas fa-bars"></i>
				</div>
		</div>
		<div class="caja-iniciosesion" id="caja_sesion">

			<div class="inicio-sesion">
				<div class="cajas">
					<input class="caja-sesion margen" type="text" placeholder="Email - Usuario">
					<input class="caja-sesion" type="text" placeholder="Contraseña">
					<small>Contraseña o usuario requerido</small>
				</div>
				<div class="btn-sesion">
					<button>Entrar</button>
				</div>
				<div class="opciones">
					<a href="#">¿Olvidaste tu contraseña?</a>
					<a href="">Registrarse</a>
				</div>
				
			</div>
			
		</div>
	</div>
</div>

<div class="contenedor-menureponsive">

	<div class="menu-responsive">

		<div class="cabezera-menuresponsive">
			
				<div class="img-logo">
					{{ HTML::image('images/img2.jpg') }}
				</div>
			
			<div class="icono-cerrar">
				<i id="cerrar_menu" class="fas fa-times"></i>
			</div>
		</div>

		<div class="inicio-sesion-menu">
				<div class="cajas">
					<input class="caja-sesion margen" type="text" placeholder="Email - Usuario" id="txt_email">
					<input class="caja-sesion" type="text" placeholder="Contraseña" id="txt_password">
					<small>Contraseña o usuario requerido</small>
				</div>
				<div class="btn-sesion">
					<button>Entrar</button>
				</div>
				<div class="opciones">
					<a href="#">¿Olvidaste tu contraseña?</a>
					<a href="">Registrarse</a>
				</div>
		</div>
		<div class="items-menu-responsive">
			<ul>
				<li><a href="#"><i class="fas fa-angle-right"></i>Inicio</a></li>
				<li><a href="#"><i class="fas fa-angle-right"></i>Curso</a></li>
				<li><a href="#"><i class="fas fa-angle-right"></i>¿Quienes Somos?</a></li>
				<li><a href="#"><i class="fas fa-angle-right"></i>Testimonio</a></li>
			</ul>
		</div>
	</div>
	

</div>