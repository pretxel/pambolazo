<?php

namespace Pambolazo\Services;

use Pambolazo\Models\TeamModel as Model;
use Pambolazo\Managers\TeamManager as Manager;

class TeamService extends BaseService
{

  public function __construct(Model $Model, Manager $Manager)
  {
    parent::__construct($Model, $Manager);
  }


}
