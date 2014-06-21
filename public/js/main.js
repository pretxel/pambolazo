$(document).ready(function() {

    $(document).foundation();

    $("#myModal").foundation('reveal', 'open');
    $("#confirmar").click(function() {
        nombreConf = $("#nombreConf").val();
        emailConf = $("#emailConf").val();
        if ($("#nombreConf").val() != '' && $("#emailConf").val() != '') {

            $.ajax({
                url: 'valida',
                data: {
                    'email': $("#emailConf").val()
                },
                type: "post"
            }).done(function(res) {
                if (res == 1) {
                    alert("Ya Existe el correo");
                } else {
                    $("#bienvenido").css('display', 'block')
                    $("#nombre").val(nombreConf);
                    $("#email").val(emailConf);
                    $("#bienvenidoNombre").text(nombreConf);
                    $("#myModal").foundation('reveal', 'close');
                }
            }).fail();


        }
    });

    $(".reveal-modal-bg").click(function() {
        $(".reveal-modal-bg").css('display', 'block');
    });

    $(".checkGrupoA").change(function() {
        checks(this);
    });
    $(".checkGrupoB").change(function() {
        checks(this);
    });
    $(".checkGrupoC").change(function() {
        checks(this);
    });
    $(".checkGrupoD").change(function() {
        checks(this);
    });
    $(".checkGrupoE").change(function() {
        checks(this);
    });
    $(".checkGrupoF").change(function() {
        checks(this);
    });
    $(".checkGrupoG").change(function() {
        checks(this);
    });
    $(".checkGrupoH").change(function() {
        checks(this);
    });

    $(".comboTransA").change(function() {
        changeCombo(this);
    });
    $(".comboTransB").change(function() {
        changeCombo(this);
    });
    $(".comboTransC").change(function() {
        changeCombo(this);
    });
    $(".comboTransD").change(function() {
        changeCombo(this);
    });
    $(".comboTransE").change(function() {
        changeCombo(this);
    });
    $(".comboTransF").change(function() {
        changeCombo(this);
    });
    $(".comboTransG").change(function() {
        changeCombo(this);
    });
    $(".comboTransH").change(function() {
        changeCombo(this);
    });


    function checks(entra) {
        var comobo = $(entra).parents('td');
        var idSele = comobo[0].nextSibling.nextSibling.children[0].id;

        var checados = $("." + entra.className + ":checked");

        if (checados.length > 2) {
            $(entra).attr('checked', false);
        }


        if ($(entra).is(':checked')) {
            // alert("Selecionado");
            // var comobo = $(this).parents('td');
            // var idSele = comobo[0].nextSibling.nextSibling.children[0].id;
            $("#" + idSele).css('display', 'block');
            //alert(comobo[0].nextSibling.nextSibling.children[0].id);
        } else {
            $("#" + idSele).css('display', 'none');
            $("#" + idSele).val(0);
            // alert("Deseleccionado");
        }
    }

    function changeCombo(entra) {
        var comobo = $(entra).parents('td');
        var bro = comobo.siblings('td');
        var trans = $("." + entra.className);
        var tam = trans.length;
        var valo;

        if (entra.value == 1) {
            valo = 1;
        } else if (entra.value == 2) {
            valo = 2
        }

        var dis = $("." + entra.className);
        for (var i = 0; i < dis.length; i++) {
            if (dis[i].style.display == "block") {
                if (entra.id == dis[i].id) {
                    // alert("Propio select");
                } else {
                    // alert("otro select");
                    if (valo == 1) {
                        dis[i].value = 2;
                    } else if (valo == 2) {
                        dis[i].value = 1;
                    }
                }
            }
            // alert(dis[i].style.display);
        }
    }

    $("#enviar").click(function() {

        var equiposChe = $("input[type=checkbox]:checked");

        // alert(comboTransH);

        if (equiposChe.length == 16) {
            $("form#postGuarda").submit();
        } else {
            $("#myModalError").foundation('reveal', 'open');
        }

        // $("form#postGuarda").submit();
        return false;
    });

    $("#confirmarToken").click(function() {


        $.ajax({
            url: 'validaToken',
            data: {
                'token': $("#tokenConf").val()
            },
            type: "post",

            beforeSend: function(msg) {
                waitMessage("Cargando");
            },
            success: function(res) {

                $.unblockUI();

                if (res == 0) {

                    waitMessage("No existe el token");
                    setTimeout($.unblockUI, 2000); 

                } else {

                    // $("#bienvenido").css('display', 'block')
                    $("#nombre").val(res[0].nombre);
                    $("#email").val(res[0].email);
                    $("#upt").val(1);
                    $("#pronosticosId").val(res[0].idpronosticos);
                    $("#score").text(res[0].score + " pts");

                    $("#bienvenidoNombre").text(res[0].nombre);

                    var equ = (res[0].equipos).split(",");
                    var pos = (res[0].posiciones).split(",");

                    $("input[type=checkbox]").each(function(index) {
                        console.log(index + ": " + this.value);
                        // alert(index + ": " + this.value);

                        var found = $.inArray(this.value, equ) > -1;
                        // alert(found);

                        if (found) {
                            this.checked = true;
                            this.disabled = true;
                            var comobo = $(this).parents('td');
                            var idSele = comobo[0].nextSibling.nextSibling.children[0].id;
                            $("#" + idSele).val(pos[index]);
                            $("#" + idSele).css('display', 'block');
                            $("#" + idSele).attr('disabled', 'true');
                            // alert(idSele);
                        }

                    });;

                    $("#myModal").foundation('reveal', 'close');
                    // alert("Ya Existe el token: " + res);
                }

            },
            error: function(err) {
                $.unblockUI();
                waitMessage("No existe el token");
                setTimeout($.unblockUI, 2000); 
            }

        });

        return false;
    });


    $("#enviarRecu").click(function() {
        sendEmailToken();
        // $("#modalRecuperar").foundation('reveal', 'close');
        $("#myModal").foundation('reveal', 'open');

        return false;
    });


    $("#estadisticasButton").click(function() {

        $.ajax({
            data: '',
            url: 'generarEstadisticas',
            type: 'get',

            beforeSend: function() {
                // $('#signModal.in').modal('hide');

                // $.blockUI({ message: 'Please wait...',
                //     css: { 
                //     border: 'none', 
                //     padding: '15px', 
                //     backgroundColor: '#000', 
                //     '-webkit-border-radius': '10px', 
                //     '-moz-border-radius': '10px', 
                //     opacity: .5, 
                //     color: '#fff' 
                // } });

                //setTimeout($.unblockUI, 2000);

            },
            success: function(response) {
                //Hide Box
                // $.unblockUI();
                alert(response);
                //User and Password match
                // if(response == 'true')
                // {   
                //     document.getElementById("userName").value = "";
                //     document.getElementById("password").value = "";

                //     //$("#loginContainer").hide(1000);
                //     //$("#patientsInfoContainer").show(1000);

                //     //getPatients();

                //     window.location.href = "dashboard";
                // }

                //User does not exist
                // else if(response == 'false')
                // {
                //     $.blockUI({ message: 'Incorrect information, try again!',
                //         css: { 
                //         border: 'none', 
                //         padding: '15px', 
                //         backgroundColor: '#000', 
                //         '-webkit-border-radius': '10px', 
                //         '-moz-border-radius': '10px', 
                //         opacity: .5, 
                //         color: '#fff' 
                //     } });

                //     setTimeout($.unblockUI, 3000);

                //     //$('#signModal').modal('show');

                //     document.getElementById("userName").value = "";
                //     document.getElementById("password").value = "";

                //     //closeCanvas.click();
                // }

                //There is error
                // else// if(response == 1)
                // {
                //     $.blockUI({ 
                //         message: 'Error found! Please contact: admin@squaredent.com',
                //         onOverlayClick: $.unblockUI 
                //     });

                //     document.getElementById("userName").value = "";
                //     document.getElementById("password").value = "";
                // }
            }
        });

        return false;
    });


});