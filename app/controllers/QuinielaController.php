<?php
class QuinielaController extends BaseController {


	function showQuiniela ($idLeague=0){


		$matches = array();

		$footballPoolsGet = FootballPools::where("idLeague", $idLeague)->get();

		//Valido si existe la liga
		if (count($footballPoolsGet) != 0){

			//Se valida si esta disponible
			if ($footballPoolsGet[0]->status == 1){
				$teams = FootballPoolsMatch::where('idFootballPools', $idLeague)->get();

				if (count($teams) > 0){

					for ($i=0; $i < count($teams) ; $i++) { 
						
					$matchQuin = Match::find($teams[$i]->idMatch);

					$teamLocal = Team::find($matchQuin->idTeamL);
					$teamVisit = Team::find($matchQuin->idTeamV);

					$matchQuin->nombreTL = $teamLocal->name;
					$matchQuin->nombreTV = $teamVisit->name;
					$matchQuin->imageTL = $teamLocal->image;
					$matchQuin->imageTV = $teamVisit->image;

					$tiempo = Utils::calculaTiempo($matchQuin->date);
					// Log::info("DIAS: ".$tiempo["diasFaltantes"]." HORAS: ".$tiempo["horasFaltantes"]."MINUTOS: ".$tiempo["minutosFaltantes"]);
					// Por defecto se habilita el partido
					$matchQuin->enabled = 1;

					//Se bloquea doce horas antes de cada partido programado
					if ($tiempo["diasFaltantes"] == 0 && $tiempo["horasFaltantes"] <= 12){
						$matchQuin->enabled = 0;
					}

					$matches[$i] = array();
					array_push($matches[$i], $matchQuin);

					}
				}



			// Log::info("Partidos:  ".implode(" ",$matches[0]));
			Log::info("idQuiniela:  ".$footballPoolsGet[0]->idfootballPools);
			
			//Se consulta si tiene la quiniela capturada
			$footballPoolsU =  FootballPoolsUser::whereRaw("idfootballPools = ? and idUser = ? ", array($footballPoolsGet[0]->idfootballPools,Auth::id() ))->get();

			$idFootBallUser = 0;
			//Valida si tiene quiniela capturada y recupera los datos para pintarla
			if (count($footballPoolsU) > 0){
				$idFootBallUser = $footballPoolsU[0]->idfootballPoolsUser;

				$footballPoolsUM = FootballPoolsUserMatch::where('idfootballPoolsUser',$idFootBallUser)->get();

				for ($i=0; $i < count($footballPoolsUM); $i++) { 
				
					$footbalPoolsUR = FootballPoolsUserResult::find($footballPoolsUM[$i]->idfootballPools_user_match);

					
					if ($matches[$i][0]->idmatch === $footbalPoolsUR->idmatch){
						$matches[$i][0]->golesL = $footbalPoolsUR->golesL;
						$matches[$i][0]->golesV = $footbalPoolsUR->golesV;
						// Log::info("GOLES: ");
					}
	
				}


			}


			return View::make('dashboard.quiniela')
					->with('matches',$matches)
					->with('idQuiniela', $footballPoolsGet[0]->idfootballPools)
					->with('idUserQuiniela', $idFootBallUser)
					->with('nameQuiniela', $footballPoolsGet[0]->name);

			}

		}else{
			return View::make('dashboard.errorQuiniela');
		}

 	}



 	function updateQuiniela(){

 		$idQuiniela = Input::get('idQuiniela');
 		$idUserQuiniela = Input::get('idUserQuiniela');
 		$data = Input::get('data');
 		$flagNQ = 0;

 		Log::info("idUserQuiniela:  ".$idUserQuiniela);

 		if($idUserQuiniela == 0){
 			$footballPoolsU = new FootballPoolsUser;
 			$flagNQ = 1;
 		}
 		else{
 			$footballPoolsU = FootballPoolsUser::find($idUserQuiniela);
 			Log::info("Quiniela en base de datos");
 		}

 		
 		$footballPoolsU->idfootballPools = $idQuiniela;
 		$footballPoolsU->idUser = Auth::id();
 		$footballPoolsU->status = 1;
 		$footballPoolsU->save();

 		$footballPoolsUM = new FootballPoolsUserMatch;
 		

 		Log::info("idQuinielaPOST:  ".$footballPoolsU->idfootballPoolsUser);

 		if ($flagNQ == 0){

 			$footballPoolsUM = FootballPoolsUserMatch::where('idfootballPoolsUser', $footballPoolsU->idfootballPoolsUser)->get();


 			for ($i=0; $i < count($footballPoolsUM) ; $i++) { 
 			// Log::info("idQuinielaPOST:  ".$data["golesL"]);


	 			$footballPoolsUR = FootballPoolsUserResult::find($footballPoolsUM[$i]->idfootballPoolsUserResult);
	 			$footballPoolsUR->idmatch = $data[$i]["idMatch"];
	 			$footballPoolsUR->golesL = $data[$i]["golesL"];
	 			$footballPoolsUR->golesV = $data[$i]["golesV"];
	 			$footballPoolsUR->status = 1;
	 			$footballPoolsUR->save();

	 		}

 		}else{

	 		for ($i=0; $i < count($data) ; $i++) { 
	 			// Log::info("idQuinielaPOST:  ".$data["golesL"]);


	 			$footballPoolsUR = new FootballPoolsUserResult;
	 			$footballPoolsUR->idmatch = $data[$i]["idMatch"];
	 			$footballPoolsUR->golesL = $data[$i]["golesL"];
	 			$footballPoolsUR->golesV = $data[$i]["golesV"];
	 			$footballPoolsUR->status = 1;
	 			$footballPoolsUR->save();


	 			$footballPoolsUM = new FootballPoolsUserMatch;
	 			$footballPoolsUM->idfootballPoolsUser = $footballPoolsU->idfootballPoolsUser;
	 			$footballPoolsUM->idfootballPoolsUserResult = $footballPoolsUR->idfootballPools_user_result;
	 			$footballPoolsUM->save();
	 		}

 		}

 		$res = new ResponseGen;
 		$res->message = "exito";
        $res->contenido = "Este es el contenido";
        $res->codeError = 200;
	    return Response::json($res);



 	}

}