<?php

namespace App\Http\Controllers\ComponentsUI;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Pambolazo\Services\LeagueService as Service;
use App\Http\Controllers\Api\LeagueController as LeagueController;
use Pambolazo\Services\LeagueModel as Model;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller as Controller;

class LeagueController extends Controller
{
  protected $leagueService;
  protected $leagueController;

  public function __construct(Service $Service, LeagueController $Controller)
  {
    $this->leagueService = $Service;
    $this->leagueController = $Controller;
    $this->middleware('auth');
  }


  public function leagues(){
    $leagues = $this->leagueService->getAll();
    return view('components.leagues.leagues')->with('leagues', $leagues);
  }

  public function league($id = null)
  {

    if ($id == null)
    {
      return view('components.leagues.league')->with('method','POST');
    }
    else
    {
      $league = $this->leagueService->getId($id);
      if (count($league) > 0 ){
        return view('components.leagues.league')->with('method','POST')->with('league', $league);
      }else{
        return redirect()->action('ComponentsUI\LeagueController@leagues');
      }
    }
  }

  public function save_league(Request $request)
  {

    if ($this->leagueController->store($request)) {
      $leagues = $this->leagueService->getAll();
      return Redirect::to('leagues')->with('errors', 'It has added')->with('leagues', $leagues);

    } else if ($response instanceof MessageBag) {
      return view('components.leagues.league')->with('error', 'Server Error')->with('method','POST');
    }

  }

  public function update_league(Request $request, $id)
  {
    $data = Input::all();

    $leaguesSt = $this->leagueService->update($data, $id);
    if (isset($leaguesSt->id)){
      Log:info($leaguesSt);
      $leagues = $this->leagueService->getAll();
      return Redirect::to('leagues');
    }
    else
    {

    }


  }

  public function delete_league(Request $request, $id){
    return $this->leagueController->destroy($request, $id);
  }
}
