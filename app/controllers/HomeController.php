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

	public function showWelcome()
	{
		$equipoL = "Real Madrid";
		$equipoV = "Atletico de Madrid";

		$fechaFormato = date("Y-m-d");
		Log::info("FECHA HOY: ".$fechaFormato);
		$paridos = Partidos::where('fecha','=','2014-06-15')->get();
		Log::info("PARTIDOS: ".$paridos);

		if (count($paridos) == 0){
			Log::info("NO HAY PARTIDOS HOY");
			return View::make('sinPartidos');
		}else{

			$aleatorio = rand(0,(count($paridos)-1));
			return View::make('hello')->with('equipoL',$paridos[$aleatorio]->local)->with('equipoV',$paridos[$aleatorio]->visitante);
		}
	}


	public function showPronosticos()
	{
		// $datetime1 = date("Y-m-d");
		$datetime1 = new DateTime("now");
		$datetime2 = date_create('2014-06-12');

		$interval = date_diff($datetime1, $datetime2);
		$diasFaltantes = $interval->format('%a días');

		$dias = $interval->format('%R%a');

		Log::info("Dias faltantes: ".$diasFaltantes);

		if ($dias > 0){
			Log::info("TODAVIA FALATA PARA EL MUNDIAL");
		}else{
			Log::info("YA INICIO EL MUNDIAL");
		}

		$pronosticos = Pronosticos::all();
		return View::make('pronosticos')->with('total',count($pronosticos))->with('diasFal',$diasFaltantes);
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
		Log::info("INFO: ".$pronosticos);

		if(empty($pronosticos)){
			return 1;
		}
		else
		{
			return 0;
		}
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

			

		$conjEquipos = $brasil.",".$mexico.",".$camerun.",".$croacia.",".$españa.",".$holanda.",".$chile.",".$australia.",".$colombia.",".$grecia.",".$costaMarfil.",".$japon.",".$uruguay.",".$costaRica.",".$inglaterra.",".$italia.",".$suiza.",".$ecuador.",".$francia.",".$honduras.",".$argentina.",".$bosnia.",".$iran.",".$nigeria.",".$alemania.",".$portugal.",".$usa.",".$ghana.",".$belgica.",".$rusia.",".$corea.",".$argelia;
		$conPosiciones = $seleBrasil.",".$seleMexico.",".$seleCamerun.",".$seleCroacia.",".$seleEspaña.",".$seleHolanda.",".$seleChile.",".$seleAustralia.",".$seleColombia.",".$seleGrecia.",".$seleCostaM.",".$seleJapon.",".$seleUruguay.",".$seleCostaR.",".$seleInglaterra.",".$seleItalia.",".$seleSuiza.",".$seleEcuador.",".$seleFrancia.",".$seleHonduras.",".$seleArgentina.",".$seleBosnia.",".$seleIran.",".$seleNigeria.",".$seleAlemania.",".$selePortugal.",".$seleEEUU.",".$seleGhana.",".$seleBelgica.",".$seleRusia.",".$seleCorea.",".$seleArgelia;

		$token = Hash::make($nombre);

		$pronostico = new Pronosticos;
		$pronostico->equipos = $conjEquipos;
		$pronostico->nombre = $nombre;
		$pronostico->posiciones = $conPosiciones;
		$pronostico->token = $token;
		$pronostico->email = $email;

		$pronostico->save();

		Log::info("VALOR BRASIL: ".$conjEquipos);



		//Datos para enviar
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
		// return Redirect::to('gracias/'.$token);

	}


	public function gracias($token=0) {
			
			return View::make('gracias')->with('token',$token);
	}

}
