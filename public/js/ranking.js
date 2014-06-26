function rankingShow(){

	$.ajax({
            url: 'ranking',
            data: {
                
            },
            type: "post",

            beforeSend: function(msg) {
                waitMessage("Cargando...");
            },
            success: function(res) {

                $.unblockUI();

                var cad = "";
                if (res) {
				
                	for (var i=0;i<res.length;i++){
                		cad = cad + "<tr>"
                		cad = cad + "<td>"+(i+1)+"</td><td>"+res[i].nombre+"</td><td>"+res[i].score+"</td>";
                		cad = cad + "</tr>"
                	}

                	$("#bodyRanking").html(cad);
				}

            },
            error: function(err) {
                $.unblockUI();
                waitMessage("Error");
                setTimeout($.unblockUI, 2000); 
            }

        });

        return false;
}