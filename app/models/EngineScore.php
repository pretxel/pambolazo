<?php 
class EngineScore {


	public static function ScoreMatches($idFootballPools){

		$matchesResult = array();

		$matchesResultUser = array();

		$getfootballPools = FootballPools::find($idFootballPools);


		if ($getfootballPools->status == 1){
			$footballPoolsM = FootballPoolsMatch::where('idFootballPools', $idFootballPools)->get();

			if (count($footballPoolsM) > 0){

				for ($i=0; $i < count($footballPoolsM)  ; $i++) { 
					$getResult = Result::where('idmatch',$footballPoolsM[$i]->idMatch)->get();
					array_push($matchesResult, $getResult[0]);
				}


			}

		}

		Log::info("Resultados Jornada: ".implode(" ",$matchesResult));

		$footballPoolsU = FootballPoolsUser::where('idfootballPools', $idFootballPools)->get();

		if (count($footballPoolsU) > 0){
			for ($i=0; $i < count($footballPoolsU) ; $i++) { 
				
			//Recolecto los marcadores capturados por los usuarios
				$matchesResultUser = array();

			$footballPoolsUM = FootballPoolsUserMatch::where('idfootballPoolsUser', $footballPoolsU[$i]->idfootballPoolsUser)->get();

				if (count($footballPoolsUM) > 0){

					for ($j=0; $j < count($footballPoolsUM); $j++) { 
						
						$footballPoolsUR = FootballPoolsUserResult::find($footballPoolsUM[$j]->idfootballPoolsUserResult);
						array_push($matchesResultUser, $footballPoolsUR);
					}
				}


				//Se califica cada usuario conforme los resultados
				EngineScore::calificaQuiniela($footballPoolsU[$i]->idUser, $matchesResultUser, $matchesResult);

				Log::info("Resultados Jornada Usuario:". $footballPoolsU[$i]->idUser." --  ".implode(" ",$matchesResultUser));

			}



		}
		else
		{
			Log::info("No hay quinielas de usuarios para esta jornada");
		}




	}


	public static function calificaQuiniela($idUser, $arrayMarcadores, $arrayResultados){

		$puntosTotales = 0;
		$GLResult = 0;
		$GVResult = 0;
		$GLUser = 0;
		$GVUser = 0;

		// Log::info("NUMERO: ".$arrayResultados[0][0]->goalsL);

		for ($i=0; $i < count($arrayResultados); $i++) { 

			$GLResult = 0;
			$GVResult = 0;
			$GLUser = 0;
			$GVUser = 0;

			//Determina quien gana de los resultados
			if ($arrayResultados[$i]->goalsL > $arrayResultados[$i]->goalsV){
				$GLResult = 1;
			}else if ($arrayResultados[$i]->goalsV > $arrayResultados[$i]->goalsL){
				$GVResult = 1;
			}

			Log::info("RR GANA LOCAL : ".$GLResult."  GANA VISITANTE: ".$GVResult);

			//Determina quien gana de los datos del usuario
			if ($arrayMarcadores[$i]->golesL > $arrayMarcadores[$i]->golesV){
				$GLUser = 1;
			}else if ($arrayMarcadores[$i]->golesV > $arrayMarcadores[$i]->golesL){
				$GVUser = 1;
			}

			Log::info("RU GANA LOCAL : ".$GLUser."  GANA VISITANTE: ".$GVUser);


			

			


			if($arrayMarcadores[$i]->golesL == $arrayResultados[$i]->goalsL && $arrayMarcadores[$i]->golesV == $arrayResultados[$i]->goalsV){
				$puntosTotales += 10;
			} else if ($GLResult != 0 || $GVResult != 0){
				
				if ($GLResult == $GLUser && $GVResult == $GVUser){
					$puntosTotales += 4;
				}


			}


		}

		Log::info("Puntos Totales para Usuario: ".$idUser." --- ".$puntosTotales);
		$user_point = User::find($idUser);
		$user_point->score = $user_point->score + $puntosTotales;
		$user_point->save();


	}


}