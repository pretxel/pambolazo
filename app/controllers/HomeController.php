<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function showEliminatorias($fase=0){




		$tiempo = Utils::calculaTiempo('2014-07-09 17:00:00');

		$tiempoCierre = Utils::calculaTiempo('2014-07-12 15:00:00');

		Log::info("Dias faltantes: ".$tiempo["diasFaltantes"]);
		Log::info("DIAS: ".$tiempo["diasFaltantes"]." HORAS: ".$tiempo["horasFaltantes"]."MINUTOS: ".$tiempo["minutosFaltantes"]);

		$diasFaltantes = $tiempo["diasFaltantes"];
		$horasFaltantes = $tiempo["horasFaltantes"];
		$minutosFaltantes = $tiempo["minutosFaltantes"];

		$isActivo = 0;
		$estadisticas = '';

		if ($diasFaltantes > 0 || $horasFaltantes > 0 || $minutosFaltantes > 0){
			$isActivo = 1;
			Log::info("TODAVIA FALTA PARA LA ELIMINATORIAS");
		}else{
			$isActivo = 0;
			$diasFaltantes = 0;
			$horasFaltantes = 0;
			$estadisticas =  Utils::generaEstadisticas();
			Log::info("YA EMPEZO LA ELIMINATORIAS");
		}


		$diasFaltantesCierre = $tiempoCierre["diasFaltantes"];
		$horasFaltantesCierre = $tiempoCierre["horasFaltantes"];
		$minutosFaltantesCierre = $tiempoCierre["minutosFaltantes"];

		$isActivoCierre = 0;

		if ($diasFaltantesCierre > 0 || $horasFaltantesCierre > 0 || $minutosFaltantesCierre > 0){
			$isActivoCierre = 1;
			Log::info("TODAVIA PARA QUE TERMINE EL CIERRE DE ELIMINATORIAS");
		}else{
			$isActivoCierre = 0;
			$diasFaltantesCierre = 0;
			$horasFaltantesCierre = 0;
			Log::info("YA TERMINO LA CAPTURA DE ELIMINATORIAS");
		}


		// $elimPron = ElimPronosticos::where('')

		$pronosticos = Pronosticos::all();
		

		if ($fase == 8){
			$eliminatorias = Eliminatorias::where('tipoElim',8)->get();
			$isActivoCierre = 0;
		}else if ($fase == 4){
			$eliminatorias = Eliminatorias::where('tipoElim',4)->get();
			$isActivoCierre = 0;
		}else if ($fase == 2){
			$isActivoCierre = 0;
			$eliminatorias = Eliminatorias::where('tipoElim',2)->get();
		}else if ($fase == 1){
			$eliminatorias = Eliminatorias::where('tipoElim',1)->get();
		}else{
			$eliminatorias = Eliminatorias::where('tipoElim',1)->get();
			$fase = 1;
		}

		

		Log::info("COUNT: ".count($eliminatorias));
		return View::make('eliminatoria')->with('eliminatorias',$eliminatorias)
				->with('total',count($pronosticos))
				->with('diasFal',$diasFaltantesCierre." dias ".$horasFaltantesCierre." horas")
				->with('isActivo', $isActivo)
				->with('isActivoCierre', $isActivoCierre)
				->with('estadisticas', $estadisticas)
				->with('fase', $fase);

	}


	public function showWelcome()
	{
		$equipoL = "Real Madrid";
		$equipoV = "Atletico de Madrid";

		$fechaFormato = date("Y-m-d");
		Log::info("FECHA HOY: ".$fechaFormato);
		$paridos = Partidos::where('fecha','=',$fechaFormato)->get();
		Log::info("PARTIDOS: ".$paridos);

		if (count($paridos) == 0){
			Log::info("NO HAY PARTIDOS HOY");
			return View::make('sinPartidos');
		}else{

			$aleatorio = rand(0,(count($paridos)-1));
			$imagenEquipoL = "";
			$imagenEquipoV = "";

			if ($paridos[$aleatorio]->local == "Brasil"){
				$imagenEquipoL = "copa/bra.png";

			}
			if ($paridos[$aleatorio]->visitante == "Croacia"){
				$imagenEquipoV = "copa/cro.png";
			}


			
			return View::make('hello')
				->with('equipoL',$paridos[$aleatorio]->local)
				->with('equipoV',$paridos[$aleatorio]->visitante)
				->with('imagenEquipoL', $imagenEquipoL)
				->with('imagenEquipoV', $imagenEquipoV);
		}
	}




	public function showPronosticos()
	{

		$tiempo = Utils::calculaTiempo('2014-06-12 15:00:00');
		Log::info("Dias faltantes: ".$tiempo["diasFaltantes"]);
		Log::info("DIAS: ".$tiempo["diasFaltantes"]." HORAS: ".$tiempo["horasFaltantes"]."MINUTOS: ".$tiempo["minutosFaltantes"]);

		$diasFaltantes = $tiempo["diasFaltantes"];
		$horasFaltantes = $tiempo["horasFaltantes"];
		$minutosFaltantes = $tiempo["minutosFaltantes"];

		$isActivo = 0;
		$estadisticas = '';

		if ($diasFaltantes > 0 || $horasFaltantes > 0 || $minutosFaltantes > 0){
			$isActivo = 1;
			Log::info("TODAVIA FALATA PARA EL MUNDIAL");
		}else{
			$isActivo = 0;
			$diasFaltantes = 0;
			$horasFaltantes = 0;
			$estadisticas =  Utils::generaEstadisticas();
			Log::info("YA INICIO EL MUNDIAL");
		}



		$tiempoOct = Utils::calculaTiempo('2014-06-26 16:00:00');
		Log::info("Dias faltantes: ".$tiempo["diasFaltantes"]);
		Log::info("DIAS: ".$tiempo["diasFaltantes"]." HORAS: ".$tiempo["horasFaltantes"]."MINUTOS: ".$tiempo["minutosFaltantes"]);

		$diasFaltantesOct = $tiempoOct["diasFaltantes"];
		$horasFaltantesOct = $tiempoOct["horasFaltantes"];
		$minutosFaltantesOct = $tiempoOct["minutosFaltantes"];

		$isActivoOct = 0;

		if ($diasFaltantesOct > 0 || $horasFaltantesOct > 0 || $minutosFaltantesOct > 0){
			$isActivoOct = 1;
			Log::info("TODAVIA FALATA LOS OCTAVOS");
		}else{
			$isActivoOct = 0;
			$diasFaltantesOct = 0;
			$horasFaltantesOct = 0;
			Log::info("YA INICIO LOS OCTAVOS");
		}



		$pronosticos = Pronosticos::all();
		return View::make('pronosticos')
				->with('total',count($pronosticos))
				->with('diasFal',$diasFaltantes." dias ".$horasFaltantes." horas")
				->with('isActivo', $isActivo)->with('isActivoOct', $isActivoOct)
				->with('estadisticas', $estadisticas);
	}


	public function refreshScore(){
		$idProno = Input::get('idProno');
		$elimOctavos = Input::get('elimOctavos');
		$pronosticosOctavos = ElimPronosticos::whereRaw('idpronostico = ? and tipoElim = ?',  array($idProno, $elimOctavos))->orderBy('idEliminatoria')->get();
		$score =  Utils::calificaElim($pronosticosOctavos, $elimOctavos);

		return Response::json($score);
	}


	public function validarEmail(){

		$email = Input::get('email');
		$pronosticos = Pronosticos::where('email','=',$email)->count();
		if ($pronosticos > 0){
			return 1;
		}else{
			return 0;
		}

	}

	public function validaToken(){
		$token = Input::get('token');
		Log::info("TOKEN: ".$token);


		$pronosticos = Pronosticos::where('token',$token)->get();


		Log::info("INFO: ".count($pronosticos));

		$score =  Utils::califica($pronosticos);

		$pronosticosOctavos = ElimPronosticos::whereRaw('idpronostico = ? and tipoElim = ?',  array($pronosticos[0]->idpronosticos, 8))->orderBy('idEliminatoria')->get();
		$pronosticosCuartos = ElimPronosticos::whereRaw('idpronostico = ? and tipoElim = ?',  array($pronosticos[0]->idpronosticos, 4))->orderBy('idEliminatoria')->get();
		$pronosticosSeminsFinal = ElimPronosticos::whereRaw('idpronostico = ? and tipoElim = ?',  array($pronosticos[0]->idpronosticos, 2))->orderBy('idEliminatoria')->get();
		$pronosticosFinal = ElimPronosticos::whereRaw('idpronostico = ? and tipoElim = ?',  array($pronosticos[0]->idpronosticos, 1))->orderBy('idEliminatoria')->get();

		$scoreOctavos =  Utils::calificaElim($pronosticosOctavos,8);
		$scoreCuartos =  Utils::calificaElim($pronosticosCuartos,4);
		$scoreSemisFinal =  Utils::calificaElim($pronosticosSeminsFinal,2);
		$scoreFinal =  Utils::calificaElim($pronosticosFinal,1);

		$pron = Pronosticos::find($pronosticos[0]->idpronosticos);
		$pron->score = $score;
		$pron->scoreOctavos = $scoreOctavos;
		$pron->scoreCuartos = $scoreCuartos;
		$pron->scoreSemisFinal = $scoreSemisFinal;
		$pron->scoreFinal = $scoreFinal;
		$pron->save();

		$pronosticos = Pronosticos::where('token',$token)->get();

		// $datos = [
		// "score" => $score,
		// "nombre" => $pron->nombre
		// ];


		if(count($pronosticos) == 1){
			return Response::json($pronosticos);
		}
		else
		{
			return 0;
		}
	}


	public function showRanking(){
		Utils::calificaAll();
		Utils::calificaElimAll(8);
		Utils::calificaElimAll(4);
		Utils::calificaElimAll(2);
		Utils::calificaElimAll(1);

		$conPron = Pronosticos::whereRaw("score >= 0")->orderBy('score','desc')->get();
		$conOctavos = Pronosticos::whereRaw("scoreOctavos >= 0")->orderBy('scoreOctavos','desc')->get();
		$conCuartos = Pronosticos::whereRaw("scoreCuartos >= 0")->orderBy('scoreCuartos','desc')->get();
		$conSemis = Pronosticos::whereRaw("scoreSemisFinal >= 0")->orderBy('scoreSemisFinal','desc')->get();
		$conFinal = Pronosticos::whereRaw("scoreFinal >= 0")->orderBy('scoreFinal','desc')->get();

		$result=array("conPron" => json_decode($conPron), "conOctavos" => json_decode($conOctavos), "conCuartos" => json_decode($conCuartos),"conSemis" => json_decode($conSemis),"conFinal" => json_decode($conFinal));
		
		return Response::json($result);

	}


	public function savePronosticos(){

		$brasil= Input::get('brasil');
		$mexico = Input::get('mexico');
		$camerun = Input::get('camerun');
		$croacia = Input::get('croacia');
		$españa = Input::get('españa');
		$holanda = Input::get('holanda');
		$chile = Input::get('chile');
		$australia = Input::get('australia');
		$colombia = Input::get('colombia');
		$grecia = Input::get('grecia');
		$costaMarfil = Input::get('costaMarfil');
		$japon = Input::get('japon');
		$uruguay = Input::get('uruguay');
		$costaRica = Input::get('costaRica');
		$inglaterra = Input::get('inglaterra');
		$italia = Input::get('italia');
		$suiza = Input::get('suiza');
		$ecuador = Input::get('ecuador');
		$francia = Input::get('francia');
		$honduras = Input::get('honduras');
		$argentina = Input::get('argentina');
		$bosnia = Input::get('bosnia');
		$iran = Input::get('iran');
		$nigeria = Input::get('nigeria');
		$alemania = Input::get('alemania');
		$portugal = Input::get('portugal');
		$usa = Input::get('usa');
		$ghana = Input::get('ghana');
		$belgica = Input::get('belgica');
		$rusia = Input::get('rusia');
		$corea = Input::get('corea');
		$argelia = Input::get('argelia');



		$brasil = empty($brasil) ? '0' : $brasil;
		$mexico = empty($mexico) ? '0': $mexico;
		$camerun = empty($camerun) ? '0' : $camerun;
		$croacia = empty($croacia) ? '0' : $croacia;
		$españa = empty($españa) ? '0' : $españa;
		$holanda = empty($holanda) ? '0' : $holanda;
		$chile = empty($chile) ? '0' : $chile;
		$australia = empty($australia) ? '0' : $australia;
		$colombia = empty($colombia) ? '0' : $colombia;
		$grecia = empty($grecia) ? '0' : $grecia;
		$costaMarfil = empty($costaMarfil) ? '0' : $costaMarfil;
		$japon = empty($japon) ? '0' : $japon;
		$uruguay = empty($uruguay) ? '0' : $uruguay;
		$costaRica = empty($costaRica) ? '0' : $costaRica;
		$inglaterra = empty($inglaterra) ? '0' : $inglaterra;
		$italia = empty($italia) ? '0' : $italia;
		$suiza = empty($suiza) ? '0' : $suiza;
		$ecuador = empty($ecuador) ? '0' : $ecuador;
		$francia = empty($francia) ? '0' : $francia;
		$honduras = empty($honduras) ? '0' : $honduras;
		$argentina = empty($argentina ) ? '0' : $argentina;
		$bosnia = empty($bosnia) ? '0' : $bosnia;
		$iran = empty($iran) ? '0' : $iran;
		$nigeria = empty($nigeria) ? '0' : $nigeria;
		$alemania = empty($alemania) ? '0' : $alemania;
		$portugal = empty($portugal) ? '0' : $portugal;
		$usa = empty($usa) ? '0' : $usa;
		$ghana = empty($ghana) ? '0' : $ghana;
		$belgica = empty($belgica) ? '0' : $belgica;
		$rusia = empty($rusia) ? '0' : $rusia;
		$corea = empty($corea) ? '0' : $corea;
		$argelia = empty($argelia)  ? '0' : $argelia ;

		$nombre = Input::get('nombre');
	
		$email = Input::get('email');

		//Obteniendo las posiciones
		$seleBrasil = Input::get('seleBrasil');
		$seleCroacia = Input::get('seleCroacia');
		$seleMexico = Input::get('seleMexico');
		$seleCamerun = Input::get('seleCamerun');
		$seleEspaña = Input::get('seleEspaña');
		$seleHolanda = Input::get('seleHolanda');
		$seleChile = Input::get('seleChile');
		$seleAustralia = Input::get('seleAustralia');
		$seleColombia = Input::get('seleColombia');
		$seleGrecia = Input::get('seleGrecia');
		$seleCostaM = Input::get('seleCostaM');
		$seleJapon = Input::get('seleJapon');
		$seleUruguay = Input::get('seleUruguay');
		$seleCostaR = Input::get('seleCostaR');
		$seleInglaterra = Input::get('seleInglaterra');
		$seleItalia = Input::get('seleItalia');
		$seleSuiza = Input::get('seleSuiza');
		$seleEcuador = Input::get('seleEcuador');
		$seleFrancia = Input::get('seleFrancia');
		$seleHonduras = Input::get('seleHonduras');
		$seleArgentina = Input::get('seleArgentina');
		$seleBosnia = Input::get('seleBosnia');
		$seleIran = Input::get('seleIran');
		$seleNigeria = Input::get('seleNigeria');
		$seleAlemania = Input::get('seleAlemania');
		$selePortugal = Input::get('selePortugal');
		$seleGhana = Input::get('seleGhana');
		$seleEEUU = Input::get('seleEEUU');
		$seleBelgica = Input::get('seleBelgica');
		$seleArgelia = Input::get('seleArgelia');
		$seleRusia = Input::get('seleRusia');
		$seleCorea = Input::get('seleCorea');

			

		$conjEquipos = $brasil.",".$croacia.",".$mexico.",".$camerun.",".$españa.",".$holanda.",".$chile.",".$australia.",".$colombia.",".$grecia.",".$costaMarfil.",".$japon.",".$uruguay.",".$costaRica.",".$inglaterra.",".$italia.",".$suiza.",".$ecuador.",".$francia.",".$honduras.",".$argentina.",".$bosnia.",".$iran.",".$nigeria.",".$alemania.",".$portugal.",".$ghana.",".$usa.",".$belgica.",".$argelia.",".$rusia.",".$corea;
		$conPosiciones = $seleBrasil.",".$seleCroacia.",".$seleMexico.",".$seleCamerun.",".$seleEspaña.",".$seleHolanda.",".$seleChile.",".$seleAustralia.",".$seleColombia.",".$seleGrecia.",".$seleCostaM.",".$seleJapon.",".$seleUruguay.",".$seleCostaR.",".$seleInglaterra.",".$seleItalia.",".$seleSuiza.",".$seleEcuador.",".$seleFrancia.",".$seleHonduras.",".$seleArgentina.",".$seleBosnia.",".$seleIran.",".$seleNigeria.",".$seleAlemania.",".$selePortugal.",".$seleGhana.",".$seleEEUU.",".$seleBelgica.",".$seleArgelia.",".$seleRusia.",".$seleCorea;
		$upt = Input::get('upt');

		if ($upt == 0){

			$token = Hash::make($nombre);

		$pronostico = new Pronosticos;
		$pronostico->equipos = $conjEquipos;
		$pronostico->nombre = $nombre;
		$pronostico->posiciones = $conPosiciones;
		$pronostico->token = $token;
		$pronostico->email = $email;

		$pronostico->save();


		$user = array(
			    'email'=> $email,
			    'name'=>'Laravelovich'
				);

				//Datos para la plantilla de correo
				$data = array(
				    'email' => $email,
				    'name'  => '',
				    'token' => $token
				);

				Mail::send('emails.welcome', $data, function($message) use ($user)
				{
				    $message->to($user['email'], 'Pambolazo')->subject('¡Gracias por Participar!');
				});


				return View::make('gracias')->with('token',$token);

		}else{
			$pron = Pronosticos::find(Input::get('pronosticosId'));
			$pron->equipos = $conjEquipos;
			$pron->posiciones = $conPosiciones;
			$pron->nombre = $nombre;
			$pron->email = $email;
			$pron->save();

			return View::make('actualizar');
		}

		

		// Log::info("VALOR BRASIL: ".$conjEquipos);



		//Datos para enviar
				


		// return View::make('gracias')->with('token',$token);
		// return Redirect::to('gracias/'.$token);

	}


	public function gracias($token=0) {
			
			return View::make('gracias')->with('token',$token);
	}


	public function generarPdf($idPronos=0){
		$pron = Pronosticos::find($idPronos);
		Log::info("PRON : ".$pron);
		$html = View::make("pdf.quiniela")->with('equipos',$pron->equipos);
    	return PDF::load($html, 'A4', 'portrait')->show();
	}


	public function deals(){
		$deals = Deals::all();
		Log::info("Deals:  " + $deals->toString);
		return Response::json($deals);
	}

}
