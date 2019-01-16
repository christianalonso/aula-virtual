<div class="menu" id="menu_login">
	

	<div class="usuario-login">
		<div class="contenedor-imgusuario">
			<div class="img-usuario">
				{{ HTML::image('images/silueta.png') }}
			</div>
		</div>
		<div class="tipo-usuario">
			<label for="">Alumno</label>
		</div>
	</div>

	<div class="menu-items">
		
		<ul>
			<li class="mark_perfil"><a href="{{ route('misdatos') }}"><i class="fas fa-circle"></i> Mi Perfil</a></li>
			<li class="mark_miscursos"><a href="{{ route('miscursos') }}"><i class="fas fa-circle"></i> Mis Cursos</a></li>
			<li class="mark_notas"><a href="{{ route('misnotas') }}"><i class="fas fa-circle"></i> Mis Notas</a></li>
			<li class="mark_cursos"><a href="{{ route('login') }}"><i class="fas fa-circle"></i> Cursos</a></li>
			<li><a href="{{ route('inicio') }}"><i class="fas fa-circle"></i> Cerrar Sesión</a></li>
		</ul>

	</div>


</div>