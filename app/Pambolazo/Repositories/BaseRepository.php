<?php

namespace Pambolazo\Repositories;

use Pambolazo\Models\BaseModel as Model;

class BaseRepository
{
  protected $model;

  public function __construct(Model $Model)
  {
    $this->model = $Model;
  }

  public function all()
  {
    return $this->model->all();
  }

  public function findById($id)
  {
    return $this->model->find($id);
  }

  public function save($data)
  {
    $this->model->fill($data);
    return $this->model->save();
  }

  public function update($data)
  {
    $fillable = $this->model->getFillable();

    foreach ($data as $k => $v) {
        if (in_array($k, $fillable)) {
            $this->model->$k = $v;
        }
    }

    $this->model->update();
  }


}
