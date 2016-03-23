<?php

namespace Pambolazo\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

class CountryModel extends BaseModel
{
  use SoftDeletes;

  protected $table = 'countries';

  protected $fillable = ['id', 'name'];

  protected $hidden = ['deleted_at'];

}
