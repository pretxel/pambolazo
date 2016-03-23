<?php

namespace Pambolazo\Repositories;

use Pambolazo\Models\TeamModel as Model;


class TeamRepository extends BaseRepository{

  public function __construct(Model $Model)
  {
    parent::__construct($Model);
  }
  
}
