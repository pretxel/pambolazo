<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Pambolazo\Services\TeamService as Service;
use App\Http\Controllers\Api\TeamController as TeamController;


class HomeController extends Controller
{

  protected $teamController;
  protected $teamService;
  protected $imageProcess;
  protected $typesImages = ['image'];
  protected $imagesPermitted = ['image/jpeg' , 'image/png'];
  protected $pathTeams = "pambolazo/teams/";

  public function __construct(TeamController $TeamController, Service $Service)
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('home');
  }

  

}
