<?php

class EliminatoriasController extends Controller {

	public function sendEliminatoria(){

		$golesL = Input::get('golesL');
		$golesV = Input::get('golesV');
		$idElimPron = Input::get('idPron');
		$idProno = Input::get('idProno');
		$elimOctavos = Input::get('elimOctavos');
		$checkedL = Input::get('checkedL');
		$checkedV = Input::get('checkedV');
		$email = Input::get('email');
		$nombre = Input::get('nombre');

		if ($idProno == ""){
		$token = Hash::make($nombre);

		$pronostico = new Pronosticos;
		$pronostico->nombre = $nombre;
		$pronostico->token = $token;
		$pronostico->email = $email;
		$pronostico->equipos = "0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0";
		$pronostico->posiciones = "0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0";

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


				$resulPron =  Pronosticos::where('email','=',$email)->get();
				$idProno = $resulPron[0]->idpronosticos;
				$resulElim =  ElimPronosticos::whereRaw('idPronostico = ? and tipoElim = ?',array($resulPron[0]->idpronosticos,$elimOctavos))->get();
		}else{
			$resulElim =  ElimPronosticos::whereRaw('idPronostico = ? and tipoElim = ?',array($idProno,$elimOctavos))->get();
		}


		




		if (count($resulElim) > 0){

			$i =0;
			for ($i;$i<count($resulElim);$i++){

				if ($golesL[$i+1] > $golesV[$i+1]){
					$checkedL[$i+1] = "true";
				}else if ($golesL[$i+1] < $golesV[$i+1]){
					$checkedV[$i+1] = "true";
				}

				$elimUpdate = ElimPronosticos::find($resulElim[$i]->idelimPronosticos);
				$elimUpdate->golesL = $golesL[$i+1];
				$elimUpdate->golesV = $golesV[$i+1];
				$elimUpdate->checkedL = $checkedL[$i+1];
				$elimUpdate->checkedV = $checkedV[$i+1];
				$elimUpdate->save();
			}
			
		}else{
			$i =1;
			for ($i;$i<count($idElimPron);$i++){

				if ($golesL[$i] > $golesV[$i]){
					$checkedL[$i] = "true";
				}else if ($golesL[$i] < $golesV[$i]){
					$checkedV[$i] = "true";
				}

				$elimPron = new ElimPronosticos();
				$elimPron->idPronostico = $idProno;
				$elimPron->idEliminatoria = $idElimPron[$i];
				$elimPron->golesL = $golesL[$i];
				$elimPron->golesV = $golesV[$i];
				$elimPron->checkedL = $checkedL[$i];
				$elimPron->checkedV = $checkedV[$i];
				$elimPron->tipoElim = $elimOctavos;
				$elimPron->save();
			}
		}

		Log::info("GOLES: ".$golesL[1]." GOLES: ".$golesV[1]." IDPRON: ".$idElimPron[1]);

		


		$res = 1;
		return Response::json($res);

	}

	public function getEliminatoria(){

		$idPron = Input::get('idPronostico');
		$fase = Input::get('fase');

		$resul =  ElimPronosticos::whereRaw('idPronostico = ? and tipoElim = ?',array($idPron,$fase))->get();

		Log::info("CAPTURADO: ".count($resul));

		$res = 1;
		return Response::json($resul);
	}
	

}