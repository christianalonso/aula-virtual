<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera.css') }}
	{{ HTML::style('css/contenedor.css') }}
	{{ HTML::style('css/pasos.css') }}
</head>
<body>
	@include('layout.cabezera')

	<div class="contenedor">
		
		<div class="contenedor-pasos">
			<div class="pasos">
				<input type="radio" id="paso1" name="paso">
				<label for="paso1">Paso 1</label>
			</div>
			<div class="pasos">
				<input type="radio" id="paso2" name="paso">
				<label for="paso2">Paso 2</label>
			</div>
			<div class="pasos">
				<input type="radio" id="paso3" name="paso"> 
				<label for="paso3">Paso 3</label>
			</div>
		</div>

		<div class="contenedor-info-pasos">
			<div class="ventana">

					<div class="info-paso1">
						
						<div class="info-curso-paso1">
							<label class="title-info-paso">Introduccion - Básico</label>
							<label class="subtitle-info-paso">Infomacion<br>del curso</label>
							<div class="contenedor-modulo">
								<div class="modulos">
									<ul>
										<li>Modulo 1<i class="fas fa-square-full"></i></li>
										<li>Modulo 2<i class="fas fa-square-full"></i></li>
										<li>Modulo 3<i class="fas fa-square-full"></i></li>
										<li>Modulo 4<i class="fas fa-square-full"></i></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="content-square">

							<div class="square">
								<div class="square-full"></div>
							</div>
							<div class="botones">
								<button class="btn-pasos">Ant</button>
								<button class="btn-pasos">Next</button>
							</div>
							
						</div>
						
						
					</div>

					<div class="info-paso2">
						
						<div class="info-curso-paso1">
							<label class="title-info-paso">Opciones :</label>
							<div class="radios">
								<input type="radio" name="cuenta" id="tengo_cuenta">
								<label class="subtitle-info-paso" for="tengo_cuenta">Tengo una cuenta</label>
								<input type="radio" name="cuenta" id="notengo_cuenta">
								<label class="subtitle-info-paso" for="notengo_cuenta">No tengo una cuenta</label>
							</div>
							<div class="frm-paso2">
								<div class="cajas-frmpaso2">
									<input type="text" class="txt-paso2" placeholder="Nombre">
								</div>
								<div class="cajas-frmpaso2">
									<input type="text" class="txt-paso2" placeholder="Apellido">
								</div>
								<div class="cajas-frmpaso2">
									<input type="text" class="txt-paso2" placeholder="example@gmail.com">
								</div>
								<div class="cajas-frmpaso2">
									<input type="password" class="txt-paso2" placeholder="Contraseña">
								</div>
								

							</div>						

	

							
						</div>
						<div class="content-square">

							<div class="square">
								<div class="square-full">
									
								</div>
							</div>
							<div class="botones">
								<button class="btn-pasos">Ant</button>
								<button class="btn-pasos">Next</button>
							</div>
							
						</div>
						
						
					</div>

			</div>
		</div>

	</div>
</body>
</html>