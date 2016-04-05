@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      @if (isset($error))
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{$error}}</strong>
      </div>
      @endif

      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="text-center">TEAM</div>
        </div>
        <div class="panel-body">
          @if (isset($team))
          <form role="form" method="{{$method}}" action="{{ url('/teamUpt/'.$team->id) }}" enctype="multipart/form-data">
            @else
            <form role="form" method="{{$method}}" action="{{ url('/team') }}" enctype="multipart/form-data">
              @endif
              {!! csrf_field() !!}
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value="{{ $team->name or '' }}">
              </div>
              @if (!isset($team))
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <input type="file" name="image" id="exampleInputFile" value="">
              </div>
              @endif
              <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection