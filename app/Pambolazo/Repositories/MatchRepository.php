<?php

namespace Pambolazo\Repositories;

use Pambolazo\Models\MatchModel as Model;

class MatchRepository extends BaseRepository{

  public function __construct(Model $Model)
  {
    parent::__construct($Model);
  }

}
