<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Pambolazo\Services\TeamService as Service;
use App\Http\Controllers\BaseController as BaseController;

class TeamController extends BaseController
{


  public function __construct(Service $Repository)
  {
    parent::__construct($Repository);
    // $this->middleware('auth');
  }

}
