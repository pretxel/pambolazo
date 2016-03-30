<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Pambolazo\Services\TeamService as Service;
use App\Http\Controllers\Api\TeamController as TeamController;
use Pambolazo\Utils\ImageProcess;

class HomeController extends Controller
{

  protected $teamController;
  protected $teamService;
  protected $imageProcess;
  protected $typesImages = ['image'];
  protected $imagesPermitted = ['image/jpeg' , 'image/png'];
  protected $pathTeams = "pambolazo/teams/";

  public function __construct(TeamController $TeamController, Service $Service, ImageProcess $ImageProcess)
  {
    $this->teamController = $TeamController;
    $this->teamService = $Service;
    $this->imageProcess = $ImageProcess;
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('home');
  }

  public function teams (Request $request){
    $teams = $this->teamService->getAll();
    return view('teams')->with('teams', $teams);
  }


  public function team()
  {

    return view('team');
  }


  public function save_team(Request $request)
  {

    if(!$request->hasFile('image'))
    {
      return view('team')->with('errors', 'Image file is required');
    }

    if (!$request->file('image')->isValid())
    {
      return view('team')->with('errors', 'Invalid file');
    }

    if(!in_array($request->file('image')->getMimeType() , $this->imagesPermitted))
    {
      return view('team')->with('errors', 'invalid_file_format');
    }

    $image = $request->file('image');
    // Generate name of image
    $name = md5(uniqid() + time() + mt_rand());
    $filename = $name.'.'.$request->file('image')->guessExtension();

    if($image->move($this->pathTeams , $filename))
    {
      $request['logo'] = $filename;
      $this->teamController->store($request);
      $teams = $this->teamService->getAll();
      $filenameFinal = $this->pathTeams."".$filename;

      // Scale image and save it
      $rsr_org = $this->imageProcess->imageCreateFromAny($filenameFinal);
      $this->imageProcess->scaleAndSaveImage($filenameFinal, $rsr_org);
      return Redirect::to('teams')->with('errors', 'Se agrego equipo')->with('teams', $teams);
    }
    else
    {
      return view('team')->with('errors', 'Server error');
    }

  }





}
