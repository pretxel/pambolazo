function enviaElimi() {

    var fila = $("table#octavos tr");
    var golesL = new Array();
    var golesV = new Array();
    var idPron = new Array();
    var checkedL = new Array();
    var checkedV = new Array();

    var idPronostico = $("#idProno").val();
    var elimOctavos = $("#elimOctavos").val();
    var email = $("#email").val();
    var nombre = $("#nombre").val();

    var i = 0;
    var valid = 0;
    var empates = 0;
    jQuery.each(fila, function(i, text) {

        if (text.children[0].children.length > 0) {
            idPron[i] = text.id;
            golesL[i] = text.children[1].children[0].value;
            golesV[i] = text.children[5].children[0].value;
            checkedL[i] = "false";
            checkedV[i] = "false";

            if (text.children[0].children[0].children[0].checked == true) {
                checkedL[i] = "true";
            }
            if (text.children[6].children[0].children[0].checked == true) {
                checkedV[i] = "true";
            }

            if (golesL[i] == "" || golesV[i] == "") {
                valid++;
            }

            if ((golesL[i] == golesV[i]) && checkedL[i] != "true" && checkedV[i] != "true") {
                empates++;
            }

            // var golesL = text.children[0].children[0].value;
            // var golesV = text.children[4].children[0].value;
            // alert("golesL :" + golesL[i] + " golesV: " + golesV[i]);
            i++;
        }

    });


    if (valid > 0) {
        waitMessage("Faltan algunos campos.");
        setTimeout($.unblockUI, 2000);
    } else if (valid == 0 && empates > 0) {
        waitMessage("Tienes marcadores con empate, elije quien pasa.");
        setTimeout($.unblockUI, 2000);
    } else {



        $.ajax({
            url: '/sendEliminatorias',
            data: {
                "golesL": golesL,
                "golesV": golesV,
                "idPron": idPron,
                "idProno": idPronostico,
                "elimOctavos": elimOctavos,
                "checkedL": checkedL,
                "checkedV": checkedV,
                "email": email,
                "nombre": nombre
            },
            type: "post",

            beforeSend: function(msg) {
                waitMessage("Cargando...");
            },
            success: function(res) {

                $.unblockUI();

                var cad = "";
                if (res) {
                    $.growlUI('Se envio tu quiniela', 'Cuartos de Final!'); 
                    // alert(res);
                } else {
                    waitMessage("No hay Datos");
                    setTimeout($.unblockUI, 2000);
                }

            },
            error: function(err) {
                $.unblockUI();
                waitMessage("Error");
                setTimeout($.unblockUI, 2000);
            }

        });

    }

    return false;

}


function obtenerElim(idPronostico,fase) {

    var isActivoCierre = $("#isActivoElim").val();

    $.ajax({
        url: '/getEliminatorias',
        data: {
            "idPronostico": idPronostico,
            "fase": fase
        },
        type: "post",

        beforeSend: function(msg) {
            waitMessage("Cargando...");
        },
        success: function(res) {

            $.unblockUI();

            var cad = "";
            if (res) {

                jQuery.each(res, function(i, pronostico) {

                    var el = $("tr#" + pronostico.idEliminatoria);
                    el[0].children[1].children[0].value = pronostico.golesL;
                    el[0].children[5].children[0].value = pronostico.golesV;

                    if (pronostico.checkedL == "true") {
                        el[0].children[0].children[0].children[0].checked = true;
                    }

                    if (pronostico.checkedV == "true") {
                        el[0].children[6].children[0].children[0].checked = true;
                    }

                    if (isActivoCierre == "0"){
                        el[0].children[0].children[0].children[0].disabled = true;
                        el[0].children[6].children[0].children[0].disabled = true;
                        el[0].children[1].children[0].disabled = true;
                        el[0].children[5].children[0].disabled = true;
                        $("#enviarElima").attr('disabled','true');
                    }

                });
            }

        },
        error: function(err) {
            $.unblockUI();
            waitMessage("Error");
            setTimeout($.unblockUI, 2000);
        }

    });

}

function refreshScore(idPronostico, fase){

    $.ajax({
        url: '/refreshScore',
        data: {
            "idProno": idPronostico,
            "elimOctavos": fase
        },
        type: "get",

        beforeSend: function(msg) {
            waitMessage("Cargando...");
        },
        success: function(res) {

            $.unblockUI();

            var cad = "";
            if (res) {
               $("#score").text(res + " pts");
            }else{
                $("#score").text("0 pts");
            }

        },
        error: function(err) {
            $.unblockUI();
            waitMessage("Error");
            setTimeout($.unblockUI, 2000);
        }

    });
}