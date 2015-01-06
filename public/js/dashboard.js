$(document).ready(function(){ 


	$(".ligaC").click(function(){

		var idLeague =  $(this).attr("idLeague");

		window.location = "/liga/"+idLeague;
		
	});


	$("#sendQuiniela").click(function(){


		var validaciones = validaMarcadores() ;

		if (validaciones == -1){
			Gina.mensajePop("","Uppss, captura todos los marcadores");
			return false;
		}else if (validaciones == -2){
			Gina.mensajePop("","Uppss, los marcadores no pueden ser negativos");
			return false;
		}else if (validaciones == -3){
			Gina.mensajePop("","Uppss, los marcadores tiene que ser numéricos");
			return false;
		}


		var arrayObj = new Array(); 

		var tablaQui =  $("#quiniela");
		var matches = $(tablaQui[0]).find("tr[id]");
		var idQuiniela = $("#idQuiniela").val();
		var idUserQuiniela = $("#idUserQuiniela").val();

		for (var i=0; i< matches.length; i++){
			jsonMessage = new Object();

			var golesL = $(matches[i]).find("input[id=golesL]");
			var golesV = $(matches[i]).find("input[id=golesV]");

			var flagL = $(matches[i]).find("input[class=teamSwitchL]");
			var flagV = $(matches[i]).find("input[class=teamSwitchV]");
			
			jsonMessage.idMatch = matches[i].id;
			jsonMessage.golesL = golesL.val();
			jsonMessage.golesV = golesV.val();
			// jsonMessage.flagL = $('input[id='+flagL[0].id+']:radio:checked').length > 0
			// jsonMessage.flagV = $('input[id='+flagV[0].id+']:radio:checked').length > 0

			arrayObj.push(jsonMessage);

		}


		//Envio quiniela a server

		Gina.Ajax({
				uri: "/updateQuiniela",
		        method: "POST",
		        data: {"data" : arrayObj,
		        		"idQuiniela": idQuiniela,
		        		"idUserQuiniela": idUserQuiniela },
		        callback: function(response) {

	           // $("#confirm").fadeIn('slow');
	          	console.log(response);
	          	Gina.mensajePop("","Quiniela Capturada");
	            // location.reload();
	            

		        }

		    });

		console.log("CLICK");

	});


});

function desactiveTuto(idUser){

	Gina.Ajax({
		        uri: "/updateTuto",
		        method: "POST",
		        data: {"idUser" : idUser },
		        callback: function(response) {

	           	
	            
	            console.log(response);

		        }

		    });


}

function validaMarcadores(){
	var tablaQui =  $("#quiniela");
	var inputL =  $(tablaQui).find("input[id=golesL]");
	var inputV = $(tablaQui).find("input[id=golesV]");

	for (var i = 0; i < inputL.length; i++) {
		
		if ($(inputL[i]).val() ==  "" || $(inputV[i]).val() == ""){
			return -1;
		}

		if ($(inputL[i]).val() <  0 || $(inputV[i]).val() < 0){
			return -2;
		}

		if (/^([0-9])*$/.test($(inputL[i]).val()) == false || /^([0-9])*$/.test($(inputV[i]).val()) == false){
			return -3;
		}
		
	}
	return 1;
}