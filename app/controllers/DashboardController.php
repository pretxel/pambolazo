<?php
class DashboardController extends Controller {

	public function index(){
		return View::make('dashboard.index');
	}

	public function perfil(){
		return View::make('dashboard.perfil');
	}

	public function nuevaLiga(){
		return View::make('dashboard.nuevaLiga');
	}


}