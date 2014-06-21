function sendEmailToken(){

	$.ajax({
            url: 'sendRecuperacion',
            data: {
                'emailRecu': $("#emailRecu").val()
            },
            type: "post",

            beforeSend: function(msg) {
                waitMessage("Enviando");
            },
            success: function(res) {

                $.unblockUI();

                if (res == "true") {

                    waitMessage("Correo Enviado");
                    setTimeout($.unblockUI, 2000); 

                } else {
                	waitMessage("No encontramos tu correo");
                    setTimeout($.unblockUI, 2000); 

                }

            },
            error: function(err) {
                $.unblockUI();
                waitMessage("Error al Enviar Correo");
                setTimeout($.unblockUI, 2000); 
            }

        });

        return false;
}