$(document).ready(function(){ 



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