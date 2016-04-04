<?php
namespace Pambolazo\Validators;

use Pambolazo\Models\MatchModel as Model;

class MatchValidator extends BaseValidator
{
  protected $rules = array(
    'local_team_id' => 'required',
    'visitor_team_id' => 'required'
  );

  public function __construct(Model $Model)
  {
    return parent::__construct($Model);
  }
}
