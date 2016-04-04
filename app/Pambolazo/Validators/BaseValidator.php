<?php

namespace Pambolazo\Validators;

use Pambolazo\Models\BaseModel as Model;

abstract class BaseValidator
{
  protected $rules;
  protected $model;
  protected $errors;

  public function __construct(Model $Model)
  {
    $this->model = $Model;
  }

  public function isValid($data)
  {
    $this->data = $data;

    if ($this->model->exists) {
      $this->rules = $this->getUpdateRules();
    } else {
      $this->rules = $this->getCreateRules();
    }

    $rules = $this->getRules();

    $validation = \Validator::make($data, $rules);

    if ($validation->passes())
    {
      return true;
    }

    $this->errors = $validation->messages();

    return false;
  }

  public function getErrors()
  {

    return $this->errors;
  }

  public function setModel(Model $Model)
  {
    $this->model = $Model;
  }


  public function getRules()
  {
    return $this->rules;
  }

  public function getCreateRules()
  {
    return $this->getRules();
  }

  public function getUpdateRules()
  {
    return $this->getRules();
  }


}
