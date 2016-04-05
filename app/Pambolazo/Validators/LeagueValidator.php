<?php
namespace Pambolazo\Validators;

use Pambolazo\Models\LeagueModel as Model;

class LeagueValidator extends BaseValidator
{
  protected $rules = array(
    'name' => 'required'
  );

  public function __construct(Model $Model)
  {
    return parent::__construct($Model);
  }
}
