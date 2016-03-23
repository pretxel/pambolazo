<?php
namespace Pambolazo\Validators;

use Pambolazo\Models\TeamModel as Model;

class TeamValidator extends BaseValidator
{
  protected $rules = array(
    'name' => 'required',
    'logo' => 'required'
  );

  public function __construct(Model $Model)
  {
    return parent::__construct($Model);
  }
}
