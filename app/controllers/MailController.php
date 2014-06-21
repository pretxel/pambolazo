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
				    $message->to($user['email'], 'Pambolazo')->subject('¡Recordatorio Pago!');
				});


		}
	}

}