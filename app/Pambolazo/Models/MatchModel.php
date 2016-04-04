<?php

namespace Pambolazo\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchModel extends BaseModel
{
  protected $table = 'matches';

  protected $fillable = ['id', 'local_team_id', 'visitor_team_id', 'schedule_time'];


  public function local_team()
  {
    return $this->belongsTo('Pambolazo\Models\TeamModel');

  }

  public function visitor_team()
  {
    return $this->belongsTo('Pambolazo\Models\TeamModel');
  }

}
