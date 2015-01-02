<?php
class LoginController extends BaseController{

	public function signin(){
		// se obtiene los datos del POST
	    $userdata = array(
	        'email'      => Input::get('emailSe'),
	        'password'      => Input::get('passwordSe')

	    );

	    $res = new ResponseGen;

	    // Autentificamos los datos del usuario
	    if ( Auth::attempt($userdata) )
	    {
	        //Envia la vista admin
	        $res->message = "exito";
            $res->contenido = "Este es el contenido";
            $res->codeError = 200;
	        return Response::json($res);
	    }
	    else
	    {
	    	// Envia la vista de error
	    	$res->message = "fallo";
            $res->contenido = "Upps puede que tu email o contraseña no estén correctas";
            $res->codeError = 400; 
	        return Response::json($res);
	            //->with('login_errors', true);
	    }		
	}

	public function logout(){
		Auth::logout();
    	return Redirect::to('/');
	}

	public function signup(){
		$email = Input::get('email');
		$password = Input::get('password');
		$confirm_password = Input::get('confirm_password');
		$res = new ResponseGen;


		 $userdata = array(
                'email' => Input::get('email'),
                'password' =>Input::get('password'),
                'confirm_password' => Input::get('confirm_password')       
            );

		 $rules = array(
                'email' => 'required|email',
                'password' => 'required|min:5',
                'confirm_password' => 'required|same:password'
            );

		 $validation = Validator::make($userdata, $rules);

		 if ($validation->fails()){
		 	$res->message = "exito";
            $res->contenido = "La Contraseña no coincide";
            $res->codeError = 301;
            return Response::json($res);
		 }

		$usuario = User::where('email',$email)->get();

		Log::info(count($usuario));

		if (count($usuario) == 0){
			$register = new User;
			$register->email = $email;
			$register->password = Hash::make($password);

			


			if ($register->save()){
				$res->message = "exito";
            	$res->contenido = "Este es el contenido";
            	$res->codeError = 200;

            	Auth::attempt($userdata); 

				return Response::json($res);
			}else{
				$res->message = "fallo";
            	$res->contenido = "Hubo un error al registrar";
            	$res->codeError = 400;
				return Response::json($res);
			}
		}else{
			$res->message = "fallo";
            $res->contenido = "Ya existe la cuenta";
            $res->codeError = 300;
			return Response::json($res);
		}

		

		
	}


}