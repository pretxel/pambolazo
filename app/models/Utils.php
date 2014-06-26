<?php 
class Utils {
	
	public static function calculaTiempo($fecha){

		Log::info("CALCULA TIEMPOR");
		$date1 = strtotime($fecha);
		$date2 = time();
		$subTime = $date1 - $date2;
		$diasFaltantes = ($subTime/(60*60*24))%365;
		$horasFaltantes = ($subTime/(60*60))%24;
		$minutosFaltantes = ($subTime/60)%60;

		$result = [
			'diasFaltantes' => $diasFaltantes,
			'horasFaltantes' => $horasFaltantes,
			'minutosFaltantes' => $minutosFaltantes

		];

		return $result;
	}


	public static function generaEstadisticas(){

		$countAlemania = 0;
		$countArgelia = 0;
		$countArgentina = 0;
		$countAustralia = 0;
		$countBelgica = 0;
		$countBosnia = 0;
		$countBrasil = 0;
		$countCamerun = 0;
		$countChile = 0;
		$countColombia = 0;
		$countCostaMarfil = 0;
		$countCostaRica = 0;
		$countCroacia = 0;
		$countEcuador = 0;
		$countEEUU = 0;
		$countEspana = 0;
		$countFrancia = 0;
		$countGhana = 0;
		$countGrecia = 0;
		$countHonduras = 0;
		$countInglaterra = 0;
		$countIran = 0;
		$countItalia = 0;
		$countJapon = 0;
		$countMexico = 0;
		$countNigeria = 0;
		$countPaisesBajos = 0;
		$countPortugal = 0;
		$countRepCorea = 0;
		$countRusia = 0;
		$countSuiza = 0;
		$countUruguay = 0;


		$pron = Pronosticos::all();
		Log::info("TOTAL DE PRONOSTICOS: ".count($pron));
	
		for ($j=0; $j<count($pron); $j++){
			$equipos = $pron[$j]->equipos;
			$resultados =  explode(',',$equipos);
			for ($i =0; $i<count($resultados);$i++){

				switch ($resultados[$i]) {
					case '1':
						$countAlemania++;
						break;
					case '2':
						$countArgelia++;
						break;
					case '3':
						$countArgentina++;
						break;
					case '4':
						$countAustralia++;
						break;
					case '5':
						$countBelgica++;
						break;
					case '6':
						$countBosnia++;
						break;
					case '7':
						$countBrasil++;
						break;
					case '8':
						$countCamerun++;
						break;
					case '9':
						$countChile++;
						break;
					case '10':
						$countColombia++;
						break;
					case '11':
						$countCostaMarfil++;
						break;
					case '12':
						$countCostaRica++;
						break;
					case '13':
						$countCroacia++;
						break;
					case '14':
						$countEcuador++;
						break;
					case '15':
						$countEEUU++;
						break;
					case '16':
						$countEspana++;
						break;
					case '17':
						$countFrancia++;
						break;
					case '18':
						$countGhana++;
						break;
					case '19':
						$countGrecia++;
						break;
					case '20':
						$countHonduras++;
						break;
					case '21':
						$countInglaterra++;
						break;
					case '22':
						$countIran++;
						break;
					case '23':
						$countItalia++;
						break;
					case '24':
						$countJapon++;
						break;
					case '25':
						$countMexico++;
						break;
					case '26':
						$countNigeria++;
						break;
					case '27':
						$countPaisesBajos++;
						break;
					case '28':
						$countPortugal++;
						break;
					case '29':
						$countRepCorea++;
						break;
					case '30':
						$countRusia++;
						break;
					case '31':
						$countSuiza++;
						break;
					case '32':
						$countUruguay++;
						break;
					default:
						# code...
						break;
				}
			}
		}


		$countGrupoA = $countBrasil + $countMexico + $countCamerun + $countCroacia;
		$porcBrasil = $countBrasil * 100 / count($pron);
		$porcMexico = $countMexico * 100 / count($pron);
		$porcCamerun= $countCamerun * 100 / count($pron);
		$porcCroacia = $countCroacia * 100 / count($pron);

		$countGrupoB = $countEspana + $countPaisesBajos + $countChile + $countAustralia;
		$porcEspana = $countEspana * 100 / count($pron);
		$porcPaisesBajos = $countPaisesBajos * 100 / count($pron);
		$porcChile = $countChile * 100 / count($pron);
		$porcAustralia = $countAustralia * 100 / count($pron);

		$countGrupoC = $countColombia + $countGrecia + $countCostaMarfil + $countJapon;
		$porcColombia = $countColombia * 100 / count($pron);
		$porcGrecia = $countGrecia * 100 / count($pron);
		$porcCostaMarfil= $countCostaMarfil * 100 / count($pron);
		$porcJapon = $countJapon * 100 / count($pron);

		$countGrupoD = $countUruguay + $countCostaRica + $countInglaterra + $countItalia;
		$porcUruguay = $countUruguay * 100 / count($pron);
		$porcCostaRica = $countCostaRica * 100 / count($pron);
		$porcInglaterra= $countInglaterra * 100 / count($pron);
		$porcItalia = $countItalia * 100 / count($pron);

		$countGrupoE = $countSuiza + $countEcuador + $countFrancia + $countHonduras;
		$porcSuiza = $countSuiza * 100 / count($pron);
		$porcEcuador = $countEcuador * 100 / count($pron);
		$porcFrancia= $countFrancia * 100 / count($pron);
		$porcHonduras = $countHonduras * 100 / count($pron);

		$countGrupoF = $countArgentina + $countBosnia + $countIran + $countNigeria;
		$porcArgentina = $countArgentina * 100 / count($pron);
		$porcBosnia = $countBosnia * 100 / count($pron);
		$porcIran = $countIran * 100 / count($pron);
		$porcNigeria = $countNigeria * 100 / count($pron);

		$countGrupoG = $countAlemania + $countPortugal + $countGhana + $countEEUU;
		$porcAlemania = $countAlemania * 100 / count($pron);
		$porcPortugal = $countPortugal * 100 / count($pron);
		$porcGhana= $countGhana * 100 / count($pron);
		$porcEEUU = $countEEUU * 100 / count($pron);

		$countGrupoH = $countBelgica + $countArgelia + $countRusia + $countRepCorea;
		$porcBelgica = $countBelgica * 100 / count($pron);
		$porcArgelia = $countArgelia * 100 / count($pron);
		$porcRusia= $countRusia * 100 / count($pron);
		$porcRepCorea = $countRepCorea * 100 / count($pron);


		$votos = [
		"Brasil" => $countBrasil,
		"Croacia" => $countCroacia,
		"Mexico" => $countMexico,
		"Camerun" => $countCamerun,
		"Espana" => $countEspana,
		"Paises Bajos" => $countPaisesBajos,
		"Chile" => $countChile,
		"Australia" => $countAustralia,
		"Colombia" => $countColombia,
		"Grecia" => $countGrecia,
		"Costa de Marfil" => $countCostaMarfil,
		"Japon" => $countJapon,
		"Uruguay" => $countUruguay,
		"Costa Rica" => $countCostaRica,
		"Inglaterra" => $countInglaterra,
		"Italia" =>$countItalia,
		"Suiza" => $countSuiza,
		"Ecuador" => $countEcuador,
 		"Francia" => $countFrancia,
		"Honduras" => $countHonduras,
		"Argentina" => $countArgentina,
		"Iran" => $countIran,
		"Bosnia" => $countBosnia,
		"Nigeria" => $countNigeria,
		"Alemania" => $countAlemania,
		"Portugal" => $countPortugal,
		"Ghana" => $countGhana,
		"EEUU" => $countEEUU,
		"Belgica" => $countBelgica,
		"Argelia" => $countArgelia,
		"Rusia" => $countRusia,
		"Republica Corea" => $countRepCorea
		];


		$porcentajes = [
		"Brasil" => $porcBrasil,
		"Croacia" => $porcCroacia,
		"Mexico" => $porcMexico,
		"Camerun" => $porcCamerun,
		"Espana" => $porcEspana,
		"Paises Bajos" => $porcPaisesBajos,
		"Chile" => $porcChile,
		"Australia" => $porcAustralia,
		"Colombia" => $porcColombia,
		"Grecia" => $porcGrecia,
		"Costa de Marfil" => $porcCostaMarfil,
		"Japon" => $porcJapon,
		"Uruguay" => $porcUruguay,
		"Costa Rica" => $porcCostaRica,
		"Inglaterra" => $porcInglaterra,
		"Italia" =>$porcItalia,
		"Suiza" => $porcSuiza,
		"Ecuador" => $porcEcuador,
 		"Francia" => $porcFrancia,
		"Honduras" => $porcHonduras,
		"Argentina" => $porcArgentina,
		"Iran" => $porcIran,
		"Bosnia" => $porcBosnia,
		"Nigeria" => $porcNigeria,
		"Alemania" => $porcAlemania,
		"Portugal" => $porcPortugal,
		"Ghana" => $porcGhana,
		"EEUU" => $porcEEUU,
		"Belgica" => $porcBelgica,
		"Argelia" => $porcArgelia,
		"Rusia" => $porcRusia,
		"Republica Corea" => $porcRepCorea
		];


		$estadisticas = [
		"porcentajes" => $porcentajes,
		"votos" => $votos
		];

		// Log::info("TOTAL BRA: ".$countBrasil." MEX: ".$countMexico);
		
		// return Response::json($estadisticas);
		return $estadisticas;
	}

	public static function calificaAll(){


		// $plantilla= "1,0,2,0,0,1,2,0,1,0,2,0,0,1,0,2,2,0,1,0,1,0,2,0,1,0,0,2,1,0,2,0";

		$scoreDB = Score::all();
		$plantilla = $scoreDB[0]->score;


		$pron = Pronosticos::all();
		Log::info("CALIFICA RESULTADOS");
		Log::info("TOTAL DE PRONOSTICOS: ".count($pron));

		// Log::info("plantilla: ".$plantilla);
		// Log::info("pron: ".$pron[0]->posiciones);

		$score = 0;


		for ($j=0; $j<count($pron); $j++){
			$posiciones = $pron[$j]->posiciones;
			$resultados =  explode(',',$posiciones);
			$score = 0;

			$plantillaRes = explode(',',$plantilla);

			for ($i =0; $i<count($resultados);$i++){

				if ($plantillaRes[$i] == "1" || $plantillaRes[$i] == "2"){

					if($plantillaRes[$i] == $resultados[$i]){
						$score = $score + 2;
					}
					else if(($plantillaRes[$i] != $resultados[$i]) && ($resultados[$i] != "0")){
						$score = $score + 1;
					}

				}

			}

		$pronoUp = Pronosticos::find($pron[$j]->idpronosticos);
		$pronoUp->score = $score;
		$pronoUp->save();

			Log::info("EL SCORE ES: ".$score);
		}
	}


	public static function califica($pronostico){

			// $plantilla= "1,0,2,0,0,1,2,0,1,0,2,0,0,1,0,2,2,0,1,0,1,0,2,0,1,0,0,2,1,0,2,0";

			$scoreDB = Score::all();
			$plantilla = $scoreDB[0]->score;

			Log::info("POS: ".$pronostico);
			$posiciones = $pronostico[0]->posiciones;
			$resultados =  explode(',',$posiciones);
			$score = 0;

			$plantillaRes = explode(',',$plantilla);

			for ($i =0; $i<count($resultados);$i++){

				if ($plantillaRes[$i] == "1" || $plantillaRes[$i] == "2"){

					if($plantillaRes[$i] == $resultados[$i]){
						$score = $score + 2;
					}
					else if(($plantillaRes[$i] != $resultados[$i]) && ($resultados[$i] != "0")){
						$score = $score + 1;
					}

				}

			}

			Log::info("EL SCORE ES: ".$score);
		return $score;

	}

}