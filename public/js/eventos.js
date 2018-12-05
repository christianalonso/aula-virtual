$(function(){


	$("#abrir_menu").click(function(){
		
		$("body").css({
			overflow:"hidden"
		});
		$(".contenedor-menureponsive").css({
			left:"0"
		});

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
			show=false;
		}else{
			setTimeout(function() {
			    $(".caja-iniciosesion").fadeOut(250);
			},250);
			show=true;
		}
		
		return false;

	});

	var mostrar=0;
	$("#abrir_menulogin").click(function(){
		
		if(mostrar==0){

			$(".menu").css({left:"-220px"});
			$(".contenedor-menu").css({width:"0px"});
			$(".contenedor-items").css({width:"100%"});
			mostrar++;
			

		}else if(mostrar == 1){

			$(".menu").css({left:"0px"});
			$(".contenedor-menu").css({width:"220px"});
			$(".contenedor-items").css({width:"calc(100% - 220px)"});
			mostrar=0;
			
		}

	});

	$("#next").click(function(){
		$(".ventana1").hide("slide", { direction: "left" }, 250);
		$(".ventana2").show("slide", { direction: "right" }, 300);
	});

	$("#next2").click(function(){
		$(".ventana2").hide("slide", { direction: "left" }, 250);
		$(".ventana3").show("slide", { direction: "right" }, 300);
	});

	$("#ant").click(function(){
		$(".ventana2").hide("slide", { direction: "right" }, 250);
		$(".ventana1").show("slide", { direction: "left" }, 300);
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
				show=true;
            }
  
   });

})