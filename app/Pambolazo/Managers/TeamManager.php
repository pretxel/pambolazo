<?php
namespace Pambolazo\Managers;

use Pambolazo\Models\TeamModel as Model;
use Pambolazo\Validators\TeamValidator as Validator;
use Pambolazo\Repositories\TeamRepository as Repository;

class TeamManager extends BaseManager
{

  public function __construct(Model $Model, Validator $Validator, Repository $Repository)
  {
    parent::__construct($Model, $Validator, $Repository);
  }

  public function prepareData()
  {
    $data = $this->data;

    if (isset($data['name'])) {
      $data['name'] = str_slug($data['name']);
    }
    $this->data = $data;

  }

}
