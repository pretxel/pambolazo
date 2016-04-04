<?php

namespace Pambolazo\Services;

use Pambolazo\Models\BaseModel as Model;
use Pambolazo\Managers\BaseManager as Manager;

class BaseService
{

  protected $model;
  protected $manager;

  public function __construct(Model $Model, Manager $Manager)
  {
    $this->model = $Model;
    $this->manager = $Manager;
  }

  public function save($data)
  {
    return $this->manager->save($data);
  }

  public function update($data, $id)
  {
      $model = $this->manager->getId($id);
      $this->manager->setModel($model);
      return $this->manager->update($data);
  }

  public function delete($model)
  {
    $this->manager->setModel($model);
    return $this->manager->delete();
  }

  public function getAll()
  {
    return $this->manager->getAll();
  }

  public function getId($id)
  {
    return $this->manager->getId($id);
  }

}
