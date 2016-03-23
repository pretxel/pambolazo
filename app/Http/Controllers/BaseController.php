<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pambolazo\Services\BaseService as Service;
use Pambolazo\Models\BaseModel as Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;

class BaseController extends Controller
{
  protected $service;

  public function __construct(Service $Service)
  {
    $this->service = $Service;
  }

  public function index(Request $request)
  {
    return response()->json($this->service->getAll());
  }


  public function show(Request $request, $id)
  {
    $resource = $this->service->getId($id);

    if (!$resource) {
      return response()->json(['error' => 'Entity not found'], 404);
    }
    return response()->json($resource);
  }

  public function store(Request $request)
  {
    $data = Input::all();

    $response = $this->service->save($data);

    if ($response instanceof Model) {

      return response()->json($response, 200);
    } else if ($response instanceof MessageBag) {
      return response()->json($response, 400);
    }

    return response()->json(['error' => 'Server error. Try Again'], 500);
  }

  public function update(Request $request, $id)
  {
    $resource = $this->service->getId($id);

    if (!$resource) {
      return response()->json(['error' => 'Entity not found'], 404);
    }

    $data = Input::all();

    $response = $this->service->update($data);

    if ($response instanceof Model) {

      return response()->json($response, 200);
    } else if ($response instanceof MessageBag) {
      return response()->json($response, 400);
    }

    return response()->json(['error' => 'Server error. Try Again'], 500);
  }


  public function destroy(Request $request , $id)
  {
    $resource = $this->service->getId($id);

    if(!$resource)
    {
      return response()->json(['error' => 'Entity not found'] , 404);
    }

    $this->manager->setEntity($resource);

    $response = $this->manager->delete();

    if($response){

      return response()->json(['success' => 'Entity deleted'], 200);
    }

    return response()->json(['error' => 'Server error. Try Again' ],500);
  }


}
