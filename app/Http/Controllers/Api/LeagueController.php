<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Pambolazo\Services\LeagueService as Service;
use App\Http\Controllers\BaseController as BaseController;

class LeagueController extends BaseController
{


  public function __construct(Service $Service)
  {
    parent::__construct($Service);
    // $this->middleware('auth');
  }

}
