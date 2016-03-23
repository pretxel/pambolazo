<?php

namespace Pambolazo\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamModel extends BaseModel
{
  // use SoftDeletes;


  protected $table = 'teams';

  protected $fillable = ['id', 'name', 'logo'];

  // protected $hidden = ['deleted_at'];
}
