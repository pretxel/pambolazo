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
                var cadOct = "";
                if (res) {
				
                	for (var i=0;i<res.conPron.length;i++){
                        if (res.conPron[i].score > 0){
                    		cad = cad + "<tr>"
                    		cad = cad + "<td>"+(i+1)+"</td><td>"+res.conPron[i].nombre+"</td><td>"+res.conPron[i].score+"</td>";
                    		cad = cad + "</tr>"

                            
                	   }
                    }

                    for (var i=0;i<res.conOctavos.length;i++){
                        if (res.conOctavos[i].scoreOctavos > 0){
                            cadOct = cadOct + "<tr>"
                            cadOct = cadOct + "<td>"+(i+1)+"</td><td>"+res.conOctavos[i].nombre+"</td><td>"+res.conOctavos[i].scoreOctavos+"</td>";
                            cadOct = cadOct + "</tr>"
                        }
                    }

                	$("#bodyRanking").html(cad);
                    $("#bodyRankingOctavos").html(cadOct);

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