<?php

namespace App\Http\Controllers\ComponentsUI;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Pambolazo\Services\MatchService as Service;
use App\Http\Controllers\Api\MatchController as MatchController;
use Pambolazo\Services\MatchModel as Model;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller as Controller;

class MatchController extends Controller
{
  protected $matchService;
  protected $matchController;

  public function __construct(Service $Service, MatchController $Controller)
  {
    $this->matchService = $Service;
    $this->matchController = $Controller;
    $this->middleware('auth');
  }

  public function matches(){
    $matches = $this->matchService->getAll();
    return view('components.matches.matches')->with('matches', $matches);
  }

  public function match($id = null)
  {

    if ($id == null)
    {
      return view('components.matches.match')->with('method','POST');
    }
    else
    {
      $matches = $this->matchService->getId($id);
      if (count($team) > 0 ){
        return view('components.matches.match')->with('method','POST')->with('matches', $matches);
      }else{
        return redirect()->action('ComponentsUI\TeamController@matches');
      }
    }
  }

  public function save_match(Request $request)
  {

    if ($this->matchController->store($request)) {
      $matches = $this->matchService->getAll();
      return Redirect::to('matches')->with('errors', 'It has added')->with('matches', $matches);

    } else if ($response instanceof MessageBag) {
      return view('components.matches.match')->with('error', 'Server Error')->with('method','POST');
    }

  }

  public function update_match(Request $request, $id)
  {

  }


  public function deleteMatch(Request $request, $id){
    return $this->matchController->destroy($request, $id);
  }

}
