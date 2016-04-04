@extends('layouts.app')

@section('css')
 <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Match</div>

        <div class="panel-body">
          @if (isset($error))
          <div class="alert alert-danger" role="alert">{{$error}}</div>
          @endif
          @if (isset($match))
          <form role="form" method="{{$method}}" action="{{ url('/matchUpt/'.$match->id) }}">
            @else
            <form role="form" method="{{$method}}" action="{{ url('/match') }}">
              @endif
              {!! csrf_field() !!}
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Local Team</label>
                <select name="local_team_id" class="form-control">
                  <option value="36">36</option>
                  <option value="37">37</option>
                </select>

              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Visitor Team</label>
                <select name="visitor_team_id" class="form-control">
                  <option value="36">36</option>
                  <option value="37">37</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Schedule</label>
                <div class='input-group date' id='datetimepicker1'>
                  <input type='text' name="schedule_time" class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('js')
  <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <script>
  $('#datetimepicker1').datetimepicker();
  </script>
  @endsection
