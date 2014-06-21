<?php 

class EstadisticasController extends BaseController{

	public function generaEstadisticas(){

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

		$estadisticas = [
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

		Log::info("TOTAL BRA: ".$countBrasil." MEX: ".$countMexico);
		
		return Response::json($estadisticas);
	}

	


}