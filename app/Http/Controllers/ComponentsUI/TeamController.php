<?php

namespace App\Http\Controllers\ComponentsUI;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Pambolazo\Services\TeamService as Service;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Api\TeamController as TeamController;
use Pambolazo\Utils\ImageProcess;
use App\Http\Controllers\Controller as Controller;

class TeamController extends Controller
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

  public function teams (Request $request){
    $teams = $this->teamService->getAll();
    return view('components.teams.teams')->with('teams', $teams);
  }


  public function team($id = null)
  {

    if ($id == null)
    {
      return view('components.teams.team')->with('method','POST');
    }
    else
    {
      $team = $this->teamService->getId($id);
      if (count($team) > 0 ){
        return view('components.teams.team')->with('method','POST')->with('team', $team);
      }else{
        return redirect()->action('ComponentsUI\TeamController@teams');
      }
    }
  }


  public function save_team(Request $request)
  {

    if(!$request->hasFile('image'))
    {
      return view('components.teams.team')->with('error', 'Image file is required')->with('method','POST');
    }

    if (!$request->file('image')->isValid())
    {
      return view('components.teams.team')->with('error', 'Invalid file')->with('method','POST');
    }

    if(!in_array($request->file('image')->getMimeType() , $this->imagesPermitted))
    {
      return view('components.teams.team')->with('error', 'invalid_file_format')->with('method','POST');
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
      return Redirect::to('teams')->with('error', 'Se agrego equipo')->with('teams', $teams);
    }
    else
    {
      return view('components.teams.team')->with('error', 'Server error')->with('method','POST');
    }

  }


  public function update_team(Request $request, $id){
    $data = Input::all();
    // Log:info($data);
    $teams = $this->teamService->update($data, $id);
    return Redirect::to('teams')->with('error', 'Se modifico equipo')->with('teams', $teams);
  }

  public function deleteTeam(Request $request, $id){
    return $this->teamController->destroy($request, $id);
  }



}
