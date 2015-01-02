<?php
class ProfileController extends BaseController {


	function saveProfile(){

		$alias = Input::get('alias');
		$favorito = Input::get('favorito');

		$userProf =  Auth::user();
		$userProf->alias = $alias;
		$userProf->equipoFav = $favorito;
		

		if ($userProf->save()){
			return Redirect::to('/dashboard');

		}



	}


}