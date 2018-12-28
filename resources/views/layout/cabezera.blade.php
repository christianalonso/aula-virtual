<div class="contenedor-cabezera">
	
	<div class="cabezera">
		<div class="logo">
			<div class="img-logo">
				<a href="{{route('inicio')}}">
					{{ HTML::image('images/img2.jpg') }}
				</a>
			</div>
		</div>
		<div class="items">
				
				<a href="{{ route('inicio') }}">Inicio</a>
				<a href="{{ route('cursos') }}">Curso</a>
				<a href="#">¿Quienes Somos?</a>
				<a href="{{ route('testimonio') }}">Testimonio</a>
				<a href="#" id="abrir_cajasesion">Iniciar Sesión</a>
				<div class="icono-abrir">
					<i id="abrir_menu" class="fas fa-bars"></i>
				</div>
		</div>
		<div class="caja-iniciosesion" id="caja_sesion">

			<div class="inicio-sesion">
				<div class="cajas">
					<input class="caja-sesion margen" type="text" placeholder="Email - Usuario" id="txt_email" autocomplete="off">
					<input class="caja-sesion" type="text" placeholder="Contraseña" id="txt_password" autocomplete="off">
					<small id="mensaje_login">Contraseña o usuario requerido</small>
				</div>
				<div class="btn-sesion">
					<button id="entrar">Entrar</button>
				</div>
				<div class="opciones">
					<a href="#">¿Olvidaste tu contraseña?</a>
					<a href="{{ route('registrar') }}">Registrarse</a>
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
					<input class="caja-sesion margen" type="text" placeholder="Email - Usuario" id="txt_email_mobile" autocomplete="off">
					<input class="caja-sesion" type="text" placeholder="Contraseña" id="txt_password_mobile" autocomplete="off">
					<small id="mensaje_login_mobile">Contraseña o usuario requerido</small>
				</div>
				<div class="btn-sesion">
					<button id="entrar_mobile">Entrar</button>
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