<?php

namespace Pambolazo\Repositories;

use Pambolazo\Models\LeagueModel as Model;

class LeagueRepository extends BaseRepository{

  public function __construct(Model $Model)
  {
    parent::__construct($Model);
  }

}
