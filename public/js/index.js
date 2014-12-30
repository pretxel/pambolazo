
$(document).ready(function(){

$("button[type=submit]").click(function(e){
		e.preventDefault();
		console.log("CLICK FORMULARIO");

		var form = $(this.parentElement);
		
		form.data('submittrigger',$(this).attr('name'));
			
		var str="";
		var json={};
		form.find("input").each(function(){
			
			if ($(this).attr('name')=='char_sexo' && $(this).attr('checked')=='checked'){

				if ($(this).attr('id')=='radio8'){
					json[ $(this).attr('name') ] = 'F';
				} else if ($(this).attr('id')=='radio9'){
					json[ $(this).attr('name') ] = 'M';
				}

				
			}else{
				json[ $(this).attr('name') ] = $("[name="+$(this).attr('name')+"]").val();
			}
		});

		form.find('input[type=radio].css-checkbox:checked').each(function(){
			json[ $(this).attr('name') ]  = $(this).val();
		});

		form.find('input[type=checkbox]:checked').each(function(){
			json[ $(this).attr('name') ]  = $(this).val();
		});
		
		form.find("select").each(function(){
			json[ $(this).attr('name') ] = $(this).val();
		});

		var controller = $(form).attr('action');
 	

 		if (controller=="/signup" || controller=="/login" || controller=="/recuperaPass"){

	 		Gina.Ajax({
		        uri: $(form).attr('action'),
		        method: "POST",
		        data: json,
		        callback: function(response) {

	            if (response.Error == false){
	            	if (response.Resultado.codeError == 200){
	            		window.location.href = "/dashborad";
	            	}
	            	else if (response.Resultado.codeError == 300){
	            		Gina.mensajePop("Upss", "Usuario ya registrado");
	            		$(form).trigger("reset");
	            	}

	            }else{
	            	Gina.mensajePop("Upss", "Error en el servicio, intente más tarde");
	            	$(form).trigger("reset");
	            }
	            
	            console.log(response);

		        }

		    });



 		}

		



		return false;
});





});