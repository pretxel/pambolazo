<?php
class MailController extends BaseController {

	public function mandarEmails(){
		$correos =  Pronosticos::all();

		for ($i=0;$i<count($correos);$i++){
			Log::info("CORREO :".$correos[$i]->email);


			$user = array(
			    'email'=> $correos[$i]->email,
			    'name'=>'Laravelovich'
				);

				//Datos para la plantilla de correo
				$data = array(
				    'name' => $correos[$i]->nombre,
				);

				Mail::send('emails.pay', $data, function($message) use ($user)
				{
				    $message->to($user['email'], 'Pambolazo')->subject('¡Quiniela final y tercer lugar!');
				});


		}
	}

	public function mandaTestWelcome(){

		//Id en pruebas de pretxel
		$user_info = User::find(16);

		$confirmation = str_random();
	
		$user_info->confirmation = $confirmation;
		$user_info->confirmed = "false";
		$user_info->save();


		$user = array(
			    'email'=> $user_info->email,
			    'name'=>'Laravelovich'
				);

				//Datos para la plantilla de correo
		$data = array(
				    'name' => $user_info->alias,
				    'confirmation' => $confirmation
		);

		Mail::send('emails.welcome', $data, function($message) use ($user)
		{
			$message->to($user['email'], 'Pambolazo')->subject('¡Bienvenido a Pambolazo 2015!');
		});


	}


	public function mandaWelcomeTodos(){
		$correos =  User::all();

		for ($i=0;$i<count($correos);$i++){

			$user_info = User::find($correos[$i]->id);

			$confirmation = str_random();
	
			$user_info->confirmation = $confirmation;
			$user_info->confirmed = "false";
			$user_info->save();


			$user = array(
			    'email'=> $user_info->email,
			    'name'=>'Laravelovich'
				);

				//Datos para la plantilla de correo
			$data = array(
					    'name' => $user_info->alias,
					    'confirmation' => $confirmation
			);

			Mail::send('emails.welcome', $data, function($message) use ($user)
			{
				$message->to($user['email'], 'Pambolazo')->subject('¡Bienvenido a Pambolazo 2015!');
			});


		}
	}

}