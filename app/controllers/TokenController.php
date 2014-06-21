<?php

class TokenController extends BaseController {

	public function index($token){

		$pron =  Pronosticos::whereRaw("confirmation = ? and confirmed = 'false'",array($token))->get();

		if (count($pron) > 0){

			return View::make('token.reset')->with('token',$token);
		}
		else{
			return View::make('token.fail');
		}
		
		
	}

	public function sendEmail(){

		$email = Input::get("emailRecu");

		$validaEmail = Pronosticos::where('email', $email)->get(); 

		

		if (count($validaEmail) > 0){

		$confirmation = str_random();
		$pron = Pronosticos::find($validaEmail[0]->idpronosticos);
		$pron->confirmation = $confirmation;
		$pron->confirmed = "false";
		$pron->save();

		$user = array(
			    'email'=> $email,
			    'name'=>'Laravelovich'
				);

				//Datos para la plantilla de correo
		$data = array(
				    'email' => $email,
				    'name'  => '',
				    'token' => $confirmation 
				);

		Mail::send('emails.tokenRes', $data, function($message) use ($user)
				{
				    $message->to($user['email'], 'Pambolazo')->subject('¡Recupera tu Token!');
				});

			 return "true";
			}

			return "false";	

	}

	public function updateToken(){
		$confirmation = Input::get('token');
		$nuevoToken = Input::get('password');

		Log::info("TOKEN: ".$confirmation."  PASS: ".$nuevoToken);
		$pron =  Pronosticos::where('confirmation', $confirmation)->get();

		$pronUpt = Pronosticos::find($pron[0]->idpronosticos);
		$pronUpt->token = $nuevoToken;
		$pronUpt->confirmed = "true";
		$pronUpt->save();

		return Redirect::to('/');

	}

}