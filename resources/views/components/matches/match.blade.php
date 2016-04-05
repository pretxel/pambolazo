@extends('layouts.app')

@section('css')
 <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
@endsection

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
          <div class="text-center">MATCH</div>
        </div>
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
                <select id="local_team" name="local_team_id" class="form-control">
                </select>

              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Visitor Team</label>
                <select id="visitor_team" name="visitor_team_id" class="form-control">
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
  <script src="/js/app.utils.js"></script>
  <script>
  $(document).ready(function() {
      $('#datetimepicker1').datetimepicker({
        defaultDate: new Date()
      });
      var params = {
        callback : handlerDelete
      };
      Util.RequestGET(params,"/api/v1/team");

      function handlerDelete(response){
        if (!response.error){
          var data = response.resultado;

          loadCombo("#local_team", data);
          loadCombo("#visitor_team", data);
        }
      }

      function loadCombo(selector, data){
        var d = document;
        $.each(data, function( index, value ) {
          var option = d.createElement("option");
          option.value = value.id;
          option.text = value.name;
          $(selector).append(option);
        });
      }

  });
  </script>
  @endsection
