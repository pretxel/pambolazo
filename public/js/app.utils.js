/* Utils */
var Util = {};

Util.operatingSystem;  //1: iOS , 2: Android


Util.typeLog = {
	INFO: "INFO",
	WARN: "WARN",
	ERROR: "ERROR"
}

///Método que cifra una cadea a base64
Util.StringtoBase64 = function (string)
{
	return btoa(string);
}

///Método que descifra la cadena en base64
Util.Base64ToString = function (base64)
{
	var cadenaDescifrada = "";
	var error = false;
	var excepcion;
	try {
		cadenaDescifrada = atob(base64.replace("%2b/g", "+"));
	} catch (ex) {
		error = true;
		excepcion = ex;
	}

	return {
		Cadena: cadenaDescifrada,
		Error: error,
		Excepcion: excepcion
	};
}

///Obtiene la variable GET seleccionada como parametro.
Util.ParamsPath = function (parameter)
{
	var URLPagina = window.location.search.substring(1);
	var GETVars = URLPagina.split('&');
	for (var i = 0; i < GETVars.length; i++) {
		var sParameterName = GETVars[i].split('=');
		if (sParameterName[0] == parameter) {
			return sParameterName[1];
		}
	}
}

Util.ReplaceAll = function ( text, busca, reemplaza )
{
	while (text.toString().indexOf(busca) != -1)
	text = text.toString().replace(busca,reemplaza);

	return text;
}



///Método que consume un servicio REST
///Recibe un objeto cuyos miembros son:
///     uri,
///     [method]->default = "GET",
///     [(Object)data]->default = null,
///     [async]->default = true,
///     (function)callback
Util.Ajax = function(params, uri) {
	var uri = uri;
	var method = params.method;
	var data = params.data;
	var async = params.async;
	var callback = params.callback;
	var oauth = params.oauth;
	var loader = params.loader;
	var screen_loader = params.screen_loader;

	if (typeof(callback) == "undefined") {
		callback({
			Error: true,
			MensajeError: "No ha indicado la Callback",
			Resultado: null
		});
	}

	if (typeof(uri) == "undefined") {
		callback({
			Error: true,
			MensajeError: "No ha indicado el URI",
			Resultado: null
		});
	}

	if (typeof(method) == "undefined") {
		method = "GET";
	}

	if (typeof(async) == "undefined") {
		async = true;
	}

	// if (typeof(data) != "undefined") {
	//   data = JSON.stringify(data);
	// }

	if (typeof(oauth) != "undefined") {
		oauth = false;
	}

	if (typeof(loader) == "undefined"){
		loader = true;
	}

	if (typeof(screen_loader) == "undefined"){
		screen_loader = false;
	}


	var request_data = {
		url: uri,
		method: method,
		data: data
	};


	$.ajax({
		type: method,
		url: uri,
		data: data,
		headers:
    {
        'X-CSRF-Token': $('input[name="_token"]').val()
    },
		async: async,
		// contentType: "application/json; charset=utf-8",
		//dataType: "json",
		success: function(result) {
			callback({
				error: false,
				mensajeError: "",
				resultado: result
			});
		},
		error: function(e,error) {
			callback({
				error: true,
				mensajeError: e.message,
				resultado: null
			});
		},
		beforeSend: function(e){

		}
	});
}

// Método que realiza llamada GET con ajax
Util.RequestGET = function (params, uri)
{
	params.method = "GET";
	Util.Ajax(params, uri);
}

//Método que realiza llamada POST con ajax
Util.RequestPOST = function (params, uri)
{
	params.method = "POST";
	Util.Ajax(params, uri);
}

//Método que realiza llamada DELETE con ajax
Util.RequestDELETE = function (params, uri)
{
	params.method = "DELETE";
	Util.Ajax(params, uri);
}

//Método que realiza llamada PUT con ajax
Util.RequestPUT= function (params, uri)
{
	params.method = "PUT";
	Util.Ajax(params, uri);
}


Util.modal = function(option,selector){
	if (option === 'open'){
		$.blockUI({
			message: $(selector),
			fadeIn: 300,
			css: {
				width: '100%',
				left: 0,
				top:  ($(window).height() - $(selector).height()) /2 + 'px',
				border: 'none',
				background: 'transparent'
			},
			overlayCSS: {
				opacity: 0.5
			}
		});
	}else if (option === 'close'){
		$.unblockUI();
		return false;
	}else{
		Util.console(Util.typeLog.WARN, "option undefined");
	}
}





/**
* Determine the mobile operating system.
* This function either returns 'iOS', 'Android' or 'unknown'
*
* @returns {String}
*/
Util.getMobileOperatingSystem = function(){
	var userAgent = navigator.userAgent || navigator.vendor || window.opera;

	if( userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /iPod/i ) )
	{
		return 'iOS';

	}
	else if( userAgent.match( /Android/i ) )
	{

		return 'Android';
	}
	else
	{
		return 'unknown';
	}
}


Util.notifyToNative = function(obj,argFunc) {
	var funct = "";
	/* Notify native methods */
	if(Util.operatingSystem === 1 || Util.operatingSystem === '1') {
		/* iOS */
		try {
			funct =  "window.webkit.messageHandlers."+ argFunc +".postMessage";
			Util.executeFunctionByName(funct, window, obj);
			// window.webkit.messageHandlers.goWebSection.postMessage(obj);
		} catch(err) {
			Util.console(Util.typeLog.ERROR, err.message);
		}
	}
	else if(Util.operatingSystem === 2 || Util.operatingSystem === '2') {
		/* Android */
		try {
			funct =  "Android."+ argFunc;
			if (typeof obj === 'string'){
				var obj_str = obj;
			}else{
				var obj_str = JSON.stringify(obj);
			}
			Util.executeFunctionByName(funct, window, obj_str);
			// Android.goWebSection(obj);
		} catch(err) {
			Util.console(Util.typeLog.ERROR, err.message);
		}
	}
	else if(Util.operatingSystem === 3 || Util.operatingSystem === '3'){
		if (argFunc === CocaConf.NativeAction.goWebSection){
			window.location.href=obj.url;
		}

	}
	Util.console(Util.typeLog.INFO, "call function : " +funct);
	Util.console(Util.typeLog.INFO, "params : ");
	Util.console(Util.typeLog.INFO, (obj != undefined && obj != "") ? JSON.stringify(obj) : "No hay parametros");
}

Util.executeFunctionByName = function(functionName, context , args ) {
	var args = [].slice.call(arguments).splice(2);
	var namespaces = functionName.split(".");
	var func = namespaces.pop();
	for(var i = 0; i < namespaces.length; i++) {
		context = context[namespaces[i]];
	}
	return context[func].apply(context, args);
}


Util.replaceAll = function(text, search, replacement) {
	//var target = this;
	return text.replace(new RegExp(search, 'g'), replacement);
}

Util.regex_only = function (este, regex, maxlength){
	if ($(este).val().length <= maxlength){
		var val = este.value;
		var val_r = val.replace( regex , '');
		if (val != val_r) {
			este.value = val_r;
		}
	}else{
		var val = este.value;
		var val_r = val.substr(0,maxlength);
		este.value = val_r;
	}
}



Util.console = function(type, content){
	if (CocaConf.debugMode === true){
		if (typeof content === 'object'){
			console.log(type + " : " + content);
			var key;
			for (key in content) {
				if (content.hasOwnProperty(key)){
					if (typeof content[key] === "object"){
						console.log("\t-> " + key + " : " + content[key]);
						for (key2 in content[key]) {
							if (content[key].hasOwnProperty(key2)){
								console.log("\t\t-> " + key2 + " : " + content[key][key2]);
							}
						}
					}else{
						console.log("\t-> " + key + " : " + content[key]);
					}
				}
			}
		}else{
			console.log(type + " : " + content);
		}
	}
}
