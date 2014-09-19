<?php
class LoginController extends BaseController{

	public function signin(){
		// se obtiene los datos del POST
	    $userdata = array(
	        'email'      => Input::get('email'),
	        'password'      => Input::get('password')

	    );

	    // Autentificamos los datos del usuario
	    if ( Auth::attempt($userdata) )
	    {
	        //Envia la vista admin
	        return Redirect::to('dashborad');
	    }
	    else
	    {
	        // Envia la vista de error
	        return Redirect::to('/');
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

		Log::info($password);

		$usuario = User::where('email',$email)->get();

		Log::info(count($usuario));

		if (count($usuario) == 0){
			$register = new User;
			$register->email = $email;
			$register->password = Hash::make($password);

			if ($register->save()){
				return Redirect::to('/dashborad');
			}else{
				return Redirect::to('/');
			}
		}else{
			return Redirect::to('/');
		}

		

		
	}


}