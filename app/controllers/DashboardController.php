<?php
class DashboardController extends Controller {

	public function index(){

		$leagues = League::all();


		return View::make('dashboard.index')->with('leagues', $leagues);
	}

	public function perfil(){
		return View::make('dashboard.perfil');
	}

	public function nuevaLiga(){
		return View::make('dashboard.nuevaLiga');
	}


}