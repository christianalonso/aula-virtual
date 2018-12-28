<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('fontawesome/css/all.css') }}
	{{ HTML::style('css/cabezera.css') }}
	{{ HTML::style('css/contenedor.css') }}
	{{ HTML::style('css/pie_pagina.css') }}
	{{ HTML::style('css/registrar.css') }}
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/eventos.js') }}
	{{ HTML::script('js/validarLogin.js') }}
</head>
<body>
	@include('layout.cabezera')
	<div class="contenedor">
		<div class="contenedor-registro">
			<div class="registrar">
				<div class="cabezera-registrar">
					registrarme
				</div>
				<div class="body-registrar">

					<div class="formulario-registrar">

						<div class="caja-formulario">
							<input type="text" placeholder="Nombre">
						</div>
						<div class="caja-formulario">
							<input type="text" placeholder="Apellido">
						</div>
						<div class="caja-formulario">
							<input type="text" placeholder="exmaple@gmail.com">
						</div>
						<div class="caja-formulario">
							<input type="password" class="password" placeholder="Contraseña">
						</div>
						<div class="caja-formulario">
							<label class="lbl-formulario">Fecha de Nacimiento :</label>
							<div class="select">
								<select name="" id="">
									<option value="">Dia</option>
									<option value="">20</option>
								</select>
							</div>

							<div class="select">
								<select name="" id="">
									<option value="">Mes</option>
									<option value="">Diciembre</option>
								</select>
							</div>
							
							<div class="select">
								<select name="" id="">
									<option value="">Año</option>
									<option value="">1950</option>
								</select>
							</div>
						</div>
						<div class="caja-formulario">
							<label>Sexo :</label>
							<div class="radio">
								<input type="radio" name="sexo" id="m">
								<label for="m" class="lbl-radio">M</label>
							</div>
							<div class="radio">
								<input type="radio" name="sexo" id="f">
								<label for="f" class="lbl-radio">F</label>
							</div>
							
						</div>
						<div class="caja-formulario">
							<div class="caja-doble">
								<label for="">Pais</label>
								<div class="select">
									<select name="" id="">
										<option value="">Seleccionar</option>
										<option value="">1950</option>
									</select>
								</div>
							</div>
							<div class="caja-doble">
								<label for="">Departamento</label>
								<div class="select">
									<select name="" id="">
										<option value="">Seleccionar</option>
										<option value="">1950</option>
									</select>
								</div>
							</div>
							
						</div>
						<div class="caja-formulario">
							<div class="caja-doble">
								<label for="">Distrito</label>
								<div class="select">
									<select name="" id="">
										<option value="">Seleccionar</option>
										<option value="">1950</option>
									</select>
								</div>
							</div>
							<div class="caja-doble">
								<label for="">Dirección</label>
								<input type="text">
							</div>
							
						</div>
						<div class="caja-formulario">
							<input type="checkbox" id="termino">
							<label for="termino" class="terminos">Acepto los terminos y condiciones<span class="far fa-check-square ok"></span></label>
						</div>



					</div>

					<div class="foto-registrar">
						<div class="square-full">
							<div class="img-square" id="preview">
								<!--{{ HTML::image('images/img2.jpg') }}-->
							</div>
							<div class="content-agregar">
								<div class="agregar">
		   							<label>+</label>
		   							<input type="file" title="agregar foto" cursor="pointer" id="subir_foto">
		   						</div>
							</div>
						</div>

						<div class="btn-formulario">
							<button type="submit">aceptar</button>
						</div>
						
					</div>

				</div>
			</div>
		</div>


		<div class="final">
			@include('layout.pie_pagina')
		</div>
	</div>
</body>
</html>