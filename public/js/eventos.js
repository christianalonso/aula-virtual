$(function(){


	$("#abrir_menu").click(function(){
		
		$("body").css({
			overflow:"hidden"
		});
		$(".contenedor-menureponsive").css({
			left:"0"
		});
		$("#txt_email_mobile").val("");
		$("#txt_password_mobile").val("");

	});

	$("#cerrar_menu").click(function(){
		$("body").css({overflow:"visible"});
		
		$(".contenedor-menureponsive").css({left:"100%"});

		$("#txt_email").val("");
		$("#txt_password").val("");

	});

	var show=true;

	$("#abrir_cajasesion").click(function(){

		if(show){
			setTimeout(function() {
			    $(".caja-iniciosesion").fadeIn(250);
			},250);
			$(".abrir-cajasesion").css({color:"#FFB80D"});
			show=false;
		}else{
			setTimeout(function() {
			    $(".caja-iniciosesion").fadeOut(250);
			},250);
			$(".abrir-cajasesion").css({color:"#fff"});
			show=true;
		}
		
		return false;

	});

	var mostrar=0;
	$("#abrir_menulogin").click(function(){
		
		if(mostrar==0){
			
			if($("#menu_login").is(":visible")){
				$(".menu").css({left:"-220px"});
				$(".contenedor-menu").css({width:"0px"});
				$(".contenedor-items").css({width:"100%"});
				mostrar++;
			}else{
				$(".menu").css({display:"block"});
				$(".contenedor-menu").css({width:"220px"});
				$(".contenedor-items").css({width:"calc(100% - 220px)"});
				mostrar=+2;
			}

		}else if(mostrar == 1){
			console.log(mostrar)
			$(".menu").css({left:"0px"});
			$(".contenedor-menu").css({width:"220px"});
			$(".contenedor-items").css({width:"calc(100% - 220px)"});
			mostrar=0;
			
		}else if(mostrar == 2){
				$(".menu").css({left:"-220px"});
				$(".contenedor-menu").css({width:"0px"});
				$(".contenedor-items").css({width:"100%"});
				mostrar--;
		}

	});

	$("#next").click(function(){
		$(".ventana1").hide("slide", { direction: "left" }, 250);
		$(".ventana2").show("slide", { direction: "right" }, 300);
		$("#paso1").css({zoom:"1"});
		$("#paso2").css({zoom:"1.1"});
	});

	$("#next2").click(function(){
		$(".ventana2").hide("slide", { direction: "left" }, 250);
		$(".ventana3").show("slide", { direction: "right" }, 300);
		$("#paso2").css({zoom:"1"});
		$("#paso3").css({zoom:"1.1"});
	});

	$("#ant").click(function(){
		$(".ventana2").hide("slide", { direction: "right" }, 250);
		$(".ventana1").show("slide", { direction: "left" }, 300);
		$("#paso2").css({zoom:"1"});
		$("#paso1").css({zoom:"1.1"});
	});

	$("#notengo_cuenta").attr("checked",true);

	$("#tengo_cuenta").click(function(){
		setTimeout(function() {
		    $(".frm-paso2").fadeOut(250);
		},250);
		setTimeout(function() {
		    $(".login-frm2").fadeIn(500);
		},250);
	});

	$("#notengo_cuenta").click(function(){
		setTimeout(function() {
		    $(".login-frm2").fadeOut(250);
		},250);
		setTimeout(function() {
		    $(".frm-paso2").fadeIn(500);
		},250);
	});


	$(document).on("click",function(e) {
       
        var container = $("#caja_sesion");

            if (!container.is(e.target) && container.has(e.target).length === 0) { 
            	setTimeout(function() {
				    $(".caja-iniciosesion").fadeOut(125);
				},125);
				$("#abrir_cajasesion").css({color:"#fff"});
				$("#txt_email").val("");
				$("#txt_password").val("");
				show=true;
            }
   });

	$("#subir_foto").change(function(e){

		//instanciando clase FileReader

		let reader = new FileReader();

		//leemos el archivo subido y lo pasamos al FileReader
		//console.log(e.target.files[0].type);
		tipo = e.target.files[0].type;
		reader.readAsDataURL(e.target.files[0]);

		if(tipo == "image/jpeg" || tipo == "image/png"){
			//le decimos que cuando este listo ejecute el codigo interno

				reader.onload = function(){
					
					let preview  = $("#preview"); 
					preview.empty();
					imagen =  document.createElement("img");

					imagen.src = reader.result;

					preview.innerHTML = '';
					preview.append(imagen);

				}
		}else{
			alert("tipo de archivo no permitido");
		}

	});

	$("#ver_modal").click(function(){
		$('.contenedor-modal').css({top:"0"});
	})

	$("#cerrar_modal,#btn_cerrar_modal").click(function(){
		$('.contenedor-modal').css({top:"-100vh"});
	})

})
