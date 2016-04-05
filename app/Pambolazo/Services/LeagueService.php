<?php

namespace Pambolazo\Services;

use Pambolazo\Models\LeagueModel as Model;
use Pambolazo\Managers\LeagueManager as Manager;

class LeagueService extends BaseService
{

  public function __construct(Model $Model, Manager $Manager)
  {
    parent::__construct($Model, $Manager);
  }


}
