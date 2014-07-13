function rankingShow(){

	$.ajax({
            url: '/ranking',
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
                var cadCuart = "";
                var cadSemis = "";
                var cadFinal = "";
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

                    for (var i=0;i<res.conCuartos.length;i++){
                        if (res.conCuartos[i].scoreCuartos > 0){
                            cadCuart = cadCuart + "<tr>"
                            cadCuart = cadCuart + "<td>"+(i+1)+"</td><td>"+res.conCuartos[i].nombre+"</td><td>"+res.conCuartos[i].scoreCuartos+"</td>";
                            cadCuart = cadCuart + "</tr>"
                        }
                    }

                    for (var i=0;i<res.conSemis.length;i++){
                        if (res.conSemis[i].scoreSemisFinal > 0){
                            cadSemis = cadSemis + "<tr>"
                            cadSemis = cadSemis + "<td>"+(i+1)+"</td><td>"+res.conSemis[i].nombre+"</td><td>"+res.conSemis[i].scoreSemisFinal+"</td>";
                            cadSemis = cadSemis + "</tr>"
                        }
                    }

                    for (var i=0;i<res.conFinal.length;i++){
                        if (res.conFinal[i].scoreTotal > 0){
                            cadFinal = cadFinal + "<tr>"
                            cadFinal = cadFinal + "<td>"+(i+1)+"</td><td>"+res.conFinal[i].nombre+"</td><td>"+res.conFinal[i].scoreTotal+"</td>";
                            cadFinal = cadFinal + "</tr>"
                        }
                    }

                	$("#bodyRanking").html(cad);
                    $("#bodyRankingOctavos").html(cadOct);
                    $("#bodyRankingCuartos").html(cadCuart);
                    $("#bodyRankingSemis").html(cadSemis);
                    $("#bodyRankingFinal").html(cadFinal);
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