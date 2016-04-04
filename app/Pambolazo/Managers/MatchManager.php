<?php
namespace Pambolazo\Managers;

use Pambolazo\Models\MatchModel as Model;
use Pambolazo\Validators\MatchValidator as Validator;
use Pambolazo\Repositories\MatchRepository as Repository;

class MatchManager extends BaseManager
{

  public function __construct(Model $Model, Validator $Validator, Repository $Repository)
  {
    parent::__construct($Model, $Validator, $Repository);
  }

  public function prepareData()
  {
    $data = $this->data;

    if (isset($data['schedule_time'])) {
      $dt = new \DateTime($data['schedule_time']);
      $data['schedule_time'] = $dt->format('m-d-y H:i:s');
    }
    $this->data = $data;

  }

}
