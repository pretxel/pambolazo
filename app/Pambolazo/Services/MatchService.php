<?php

namespace Pambolazo\Services;

use Pambolazo\Models\MatchModel as Model;
use Pambolazo\Managers\MatchManager as Manager;

class MatchService extends BaseService
{

  public function __construct(Model $Model, Manager $Manager)
  {
    parent::__construct($Model, $Manager);
  }


}
