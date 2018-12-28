function alertaDeError(mensaje){

	if(mensaje ==""){
		mensaje = "Ups!! algo salió mal, intentalo de nuevo mas tarde";
	}

	if(!alertify.errorAlert){
	  //define a new errorAlert base on alert
	  alertify.dialog('errorAlert',function factory(){
	    return{
	            build:function(){
	                var errorHeader = '<span class="fa fa-times-circle fa-2x" '
	                +    'style="vertical-align:middle;color:#fff;">'
	                + '</span> Error';
	                this.setHeader(errorHeader);
	            },
	            prepare:function(){

	            	this.elements.dialog.style.background="#dc3545";
	            	this.elements.header.style.background="#dc3545";
	            	this.elements.dialog.style.color="#fff";
	            	this.elements.header.style.color="#fff";
	            	this.elements.footer.style.background="#dc3545";
	            	this.__internal.buttons[0].element.style.color="#dc3545";
	            	this.__internal.buttons[0].element.style.background="#fff";
	            }
	        };
	    },true,'alert');
}
//launch it.
// since this was transient, we can launch another instance at the same time.
alertify.errorAlert(mensaje);
}

function alertaDeExito(mensaje){

	if(mensaje == ""){
		mensaje = "Todo salió bien";
	}

	if(!alertify.successAlert){
	  //define a new errorAlert base on alert
	  alertify.dialog('successAlert',function factory(){
	    return{

	            build:function(){
	                var errorHeader = '<span class="fas fa-check-circle fa-2x" '
	                +    'style="vertical-align:middle;color:#fff;">'
	                + '</span> Exito';
	                this.setHeader(errorHeader);
	            },
	            prepare:function(){

	            	this.elements.dialog.style.background="#28a745";
	            	this.elements.header.style.background="#28a745";
	            	this.elements.dialog.style.color="#fff";
	            	this.elements.header.style.color="#fff";
	            	this.elements.footer.style.background="#28a745";
	            	this.__internal.buttons[0].element.style.color="#28a745";
	            	this.__internal.buttons[0].element.style.background="#fff";
	            }
	        };
	    },true,'alert');
}
//launch it.
// since this was transient, we can launch another instance at the same time.
alertify.successAlert(mensaje);

}
