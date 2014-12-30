<?php
class QuinielaController extends BaseController {


	function showQuiniela ($idLeague=0){


		$matches = array();

		$footballPoolsGet = FootballPools::where("idLeague", $idLeague)->get();

		if (count($footballPoolsGet) != 0){

		


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

					$matches[$i] = array();
					array_push($matches[$i], $matchQuin);

				}

			}

			Log::info("Partidos:  ".implode(" ",$matches[0]));
			Log::info("idQuiniela:  ".$footballPoolsGet[0]->idfootballPools);
			

			return View::make('dashboard.quiniela')
					->with('matches',$matches)
					->with('idQuiniela', $footballPoolsGet[0]->idfootballPools);

			}

		}else{
			return View::make('dashboard.errorQuiniela');
		}

 	}



 	function updateQuiniela(){

 		$idQuiniela = Input::get('idQuiniela');
 		$data = Input::get('data');

 		Log::info("idQuinielaPOST:  ".$idQuiniela);

 		for ($i=0; $i < count($data) ; $i++) { 
 			



 		}

 		

 		$res = new ResponseGen;
 		 $res->message = "exito";
         $res->contenido = "Este es el contenido";
         $res->codeError = 200;
	     return Response::json($res);

 	}

}