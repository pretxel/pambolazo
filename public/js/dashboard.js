$(document).ready(function(){ 


	$("#ligaC").click(function(){

		var idLeague =  $(this).attr("idLeague");

		window.location = "/liga/"+idLeague;
		
	});


	$("#sendQuiniela").click(function(){

		var arrayObj = new Array(); 

		var tablaQui =  $("#quiniela");
		var matches = $(tablaQui[0]).find("tr[id]");
		var idQuiniela = $("#idQuiniela").val();

		for (var i=0; i< matches.length; i++){
			jsonMessage = new Object();

			var golesL = $(matches[i]).find("input[id=golesL]");
			var golesV = $(matches[i]).find("input[id=golesV]");

			var flagL = $(matches[i]).find("input[class=teamSwitchL]");
			var flagV = $(matches[i]).find("input[class=teamSwitchV]");
			
			jsonMessage.idMatch = matches[i].id;
			jsonMessage.golesL = golesL.val();
			jsonMessage.golesV = golesV.val();
			jsonMessage.flagL = $('input[id='+flagL[0].id+']:radio:checked').length > 0
			jsonMessage.flagV = $('input[id='+flagV[0].id+']:radio:checked').length > 0

			arrayObj.push(jsonMessage);

		}


		//Envio quiniela a server

		Gina.Ajax({
				uri: "/updateQuiniela",
		        method: "POST",
		        data: {"data" : arrayObj,
		        		"idQuiniela": idQuiniela },
		        callback: function(response) {

	           
	            
	            console.log(response);

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