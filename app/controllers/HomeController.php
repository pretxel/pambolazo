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

		$pronosticos = Pronosticos::all();
		return View::make('pronosticos')->with('total',count($pronosticos));
	}

	public function savePronosticos(){

		$brasil = (empty(Input::get('brasil'))) ? '0' : Input::get('brasil');
		$mexico = (empty(Input::get('mexico'))) ? '0': Input::get('mexico');
		$camerun = (empty(Input::get('camerun'))) ? '0' : Input::get('camerun') ;
		$croacia = (empty(Input::get('croacia'))) ? '0' : Input::get('croacia');
		$españa = (empty(Input::get('españa'))) ? '0' : Input::get('españa');
		$holanda = (empty(Input::get('holanda'))) ? '0' : Input::get('holanda');
		$chile = (empty(Input::get('chile'))) ? '0' : Input::get('chile');
		$australia = (empty(Input::get('australia'))) ? '0' : Input::get('australia');
		$colombia = (empty(Input::get('colombia'))) ? '0' : Input::get('colombia');
		$grecia = (empty(Input::get('grecia'))) ? '0' : Input::get('grecia');
		$costaMarfil = (empty(Input::get('costaMarfil'))) ? '0' : Input::get('costaMarfil');
		$japon = (empty(Input::get('japon'))) ? '0' : Input::get('japon');
		$uruguay = (empty(Input::get('uruguay'))) ? '0' : Input::get('uruguay');
		$costaRica = (empty(Input::get('costaRica'))) ? '0' : Input::get('costaRica');
		$inglaterra = (empty(Input::get('inglaterra'))) ? '0' : Input::get('inglaterra');
		$italia = (empty(Input::get('italia'))) ? '0' : Input::get('italia');
		$suiza = (empty(Input::get('suiza'))) ? '0' : Input::get('suiza');
		$ecuador = (empty(Input::get('ecuador'))) ? '0' : Input::get('ecuador');
		$francia = (empty(Input::get('francia'))) ? '0' : Input::get('francia');
		$honduras = (empty(Input::get('honduras'))) ? '0' : Input::get('honduras');
		$argentina = (empty(Input::get('argentina'))) ? '0' : Input::get('argentina');
		$bosnia = (empty(Input::get('bosnia'))) ? '0' : Input::get('bosnia');
		$iran = (empty(Input::get('iran'))) ? '0' : Input::get('iran');
		$nigeria = (empty(Input::get('nigeria'))) ? '0' : Input::get('nigeria');
		$alemania = (empty(Input::get('alemania'))) ? '0' : Input::get('alemania');
		$portugal = (empty(Input::get('portugal'))) ? '0' : Input::get('portugal');
		$usa = (empty(Input::get('usa'))) ? '0' : Input::get('usa');
		$ghana = (empty(Input::get('ghana'))) ? '0' : Input::get('ghana');
		$belgica = (empty(Input::get('belgica'))) ? '0' : Input::get('belgica');
		$rusia = (empty(Input::get('rusia'))) ? '0' : Input::get('rusia');
		$corea = (empty(Input::get('corea'))) ? '0' : Input::get('corea');
		$argelia = (empty(Input::get('argelia'))) ? '0' : Input::get('argelia');
		$nombre = (empty(Input::get('nombre'))) ? '0' : Input::get('nombre');
	
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


	private function validaCampos($campo){
		if ($campo == ""){
			return "0";
		}else{
			return $campo;
		}
	}


	public function gracias($token=0) {
			
			return View::make('gracias')->with('token',$token);
	}

}
