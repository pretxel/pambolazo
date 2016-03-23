<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pambolazo\Services\TeamService as Service;

class TeamController extends BaseController
{


  public function __construct(Service $Repository)
  {
    parent::__construct($Repository);
    // $this->middleware('auth');
  }


}
