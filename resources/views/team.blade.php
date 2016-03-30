@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Team</div>

                <div class="panel-body">
                  <form role="form" method="POST" action="{{ url('/save_team') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <input type="file" name="image" id="exampleInputFile">
                    </div>
                    <button type="submit" class="btn btn-default">Save</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
