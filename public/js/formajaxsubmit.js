(function($){

	$.fn.extend({
		ajaxsubmit:function(){
			var form = $(this);
	
	form.find("input[type=submit]").each(function(){
		$(this).click(function(){
			form.data('submittrigger',$(this).attr('name'));
			form.submit();
		});
	});

	form.submit(function(e){
		e.preventDefault();
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

		// $.ajax({
		// 	url:$(this).attr('action'),
		// 	data: json,
		// 	type:"post",
		// 	beforeSend: function()
		// {
			
		// 	$.blockUI({ message: "<img src='/img/gif2.gif' width='70px'><br>Cargando...",
  //               css: { 
  //               border: 'none', 
  //               padding: '15px', 
  //               backgroundColor: '#FFF', 
  //               '-webkit-border-radius': '10px', 
  //               '-moz-border-radius': '10px', 
  //               opacity: .6, 
  //               color: '#000' 
  //           } });
 
		// 	//setTimeout($.unblockUI, 2000);
								
		// },
		// success: function(response)
		// {
		// 	//Hide Box
		// 	$.unblockUI();
		// 	if(response.status=="OK"){
		// 		var next = form.parent().parent();
		// 		var type = $('[data-type='+next.data('type')+']');
		// 		var next = next.attr('data-next');
		// 		var popup = $(".window-container.zoomin."+next);
		// 		if(response.Solicitud.SolicitudId){
		// 			window.history.replaceState({},'updatesolicitud',response.Solicitud.SolicitudId);
		// 			$('[name=solicitud]').val(response.Solicitud.SolicitudId);
		// 		}
		// 		type.attr('data-id',response.Solicitud.LinkedId);
				
		// 		// form.parent().parent().removeClass('window-container-visible').parent().fadeOut();
		// 		form.parent().parent().parent().removeClass('window-container-visible').parent().fadeOut();
		// 		$(window).scrollTop(0);
				
		// 		if(form.data('submittrigger')=="siguiente"){
		// 			popup.addClass('window-container-visible').parent().fadeIn();
		// 		}else{
		// 			$('body').css('overflow',false);
		// 		}
				
		// 	}else{
		// 		alert(response.error);
		// 	}
		// }	

		// });
		return false;
	});
		}
	});

})(jQuery);