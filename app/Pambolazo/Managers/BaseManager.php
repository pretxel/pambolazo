<?php

namespace Pambolazo\Managers;

use Pambolazo\Models\BaseModel as Model;
use Pambolazo\Validators\BaseValidator as Validator;
use Pambolazo\Repositories\BaseRepository as Repository;

class BaseManager
{
  protected $data;
  protected $model;
  protected $validator;
  protected $repository;

  public function __construct(Model $Model, Validator $Validator, Repository $Repository)
  {
    $this->model = $Model;
    $this->validator = $Validator;
    $this->repository = $Repository;
  }

  public function getId($id){
    return $this->repository->findById($id);
  }

  public function getAll(){
    return $this->repository->all();
  }

  public function save($data)
  {
    $this->data = $data;

    $this->prepareData();
    Log:info($this->data);
    $isValid = $this->validator->isValid($this->data);

    if ($isValid) {
      $this->repository->save($this->data);
      $this->model->fill($this->data);
      return $this->model;

    } else {

      return $this->validator->getErrors();

    }

  }

  public function update($data)
  {

    $this->data = $data;

    $this->prepareData();

    $this->validator->setModel($this->model);

    $isValid = $this->validator->isValid($this->data);


    if ($isValid) {
      $this->repository->setModel($this->model);
      $this->repository->update($this->data);

      return $this->model;

    } else {

      return $this->validator->getErrors();

    }
  }


  public function delete()
  {
    if($this->model->exists)
    {
      return $this->repository->delete($this->model);
    }
    else
    {
      return false;
    }
  }

  public function prepareData()
  {
    $data = $this->data;

    $this->data = $data;

  }

  public function setModel(Model $Model)
  {
    $this->model = $Model;
  }

}
