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
	{{ HTML::style('css/contacto_pag.css') }}
	{{ HTML::style('css/pie_pagina.css') }}
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/jquery-ui.js') }}
	{{ HTML::script('js/eventos.js') }}
</head>
<body>
	@include('layout.cabezera')

	<div class="contenedor">
		
		<div class="contenedor-pasos">
			<div class="pasos">
				<!--<input type="radio" id="paso1" name="paso">-->
				<label for="paso1">Paso 1</label>
			</div>
			<div class="pasos">
				<!--<input type="radio" id="paso2" name="paso">-->
				<label for="paso2">Paso 2</label>
			</div>
			<div class="pasos">
				<!--<input type="radio" id="paso3" name="paso"> -->
				<label for="paso3">Paso 3</label>
			</div>
		</div>

		<div class="contenedor-info-pasos">

			<div class="ventana1">

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
								
								<button class="btn-pasos" id="next">Next</button>
							</div>
							
						</div>
						
						
					</div>
			</div>
			
			<div class="ventana2">
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
								<div class="cajas-frmpaso2">
									<label class="subtitle-info-paso">Fecha de Nacimiento</label>
									<select class="select" name="" id="">
										<option value="">1</option>
										<option value="">2</option>
									</select>
									<select class="select" name="" id="">
										<option value="">Enero</option>
										<option value="">2</option>
									</select>
									<select class="select" name="" id="">
										<option value="">2018</option>
										<option value="">2</option>
									</select>
								</div>
								<div class="cajas-frmpaso2">
									<label for="">Sexo :</label>
									<input type="radio" name="sexo" id="masculino">
									<label for="masculino" class="lbl-frmpaso2">Masculino</label>
									<input type="radio" name="sexo" id="femenino">
									<label for="femenino" class="lbl-frmpaso2">Femenino</label>
								</div>
								<div class="cajas-frmpaso2">
									<div class="division">
										
										<div class="cajas-divididas">
											<label for="">Pais</label>
											<select class="select" name="" id="">
												<option>Peru</option>
											</select>
										</div>
										<div class="cajas-divididas">
											<label for="">Dirección</label>
											<select class="select" name="" id="">
												<option>Lima</option>
												<option>Cajamarca</option>
											</select>
											<!--<input type="text">-->
										</div>
									</div>
								</div>
								<div class="cajas-frmpaso2">
									<input type="checkbox" id="acepto">
									<label for="acepto">Acepto los terminos y condiciones</label>
								</div>

							</div>
							<div class="login-frm2">
								<div class="cajas-frmpaso2">
									<label class="lbl-login">Usuario<span>:</span></label>
									<input type="text" class="txt-paso2" placeholder="Apellido">
								</div>
								<div class="cajas-frmpaso2">
									<label class="lbl-login">Contraseña<span>:</span></label>
									<input type="text" class="txt-paso2" placeholder="example@gmail.com">
								</div>
							</div>					

							
						</div>

						<div class="content-square">

							<div class="square">
								<div class="square-full por2">
									
								</div>
							</div>
							<div class="botones">
								<button class="btn-pasos" id="ant">Ant</button>
								<button class="btn-pasos" id="next2">Next</button>
							</div>
							
						</div>
						
						
					</div>
			</div>

			<div class="ventana3">
					<div class="info-paso3">
						<div class="info-curso-paso1">
							<label class="title-info-paso">Tipo de pago</label>
							<div class="radios">
								<input type="radio" name="pago" id="tarjeta">
								<label class="subtitle-info-paso" for="tarjeta">Tarjeta de credito</label>
								<input type="radio" name="pago" id="paypal">
								<label class="subtitle-info-paso" for="paypal">Paypal</label>
							</div>
							<div class="frm-pago">
								<div class="cajas-frmpaso2">
									<label for="">Ingrese Número :</label>
									<input type="text" class="txt-paso2" placeholder="">
								</div>
							</div>
							
						</div>
						<div class="content-square">

							<div class="square">
								<div class="square-full"></div>
							</div>
							<div class="botones">
								
								<button class="btn-pasos">Comprar</button>
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