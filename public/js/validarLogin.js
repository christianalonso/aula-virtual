$(function(){

	$("#mensaje_login").css({display:"none"});
	$("#mensaje_login_mobile").css({display:"none"});
	$("#entrar").click(function(){

		if($("#txt_email").val()!="" && $("#txt_password").val()!=""){

		}else{
			$("#mensaje_login").css({display:"block"});
		}

	});

	$("#entrar_mobile").click(function(){

		if($("#txt_email_mobile").val()!="" && $("#txt_password_mobile").val()!=""){

		}else{
			$("#mensaje_login").css({display:"block"});
		}

	});


});