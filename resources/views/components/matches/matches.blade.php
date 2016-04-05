@extends('layouts.app')

@section('css')
<link href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection


@section('content')
<div class="container">
  <div class="row">
    <!-- @foreach ($matches as $match)
    <div class="panel panel-default">
    <div class="panel-body">
    {{$match->local_team->name}} VS {{$match->visitor_team->name}}
  </div>
</div>
@endforeach -->
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
      <div class="text-center">MATCHES</div>
      <div class="text-right"> <a href="/match" class="btn btn-primary text-right"><i class="fa fa-plus-circle"></i></a></div>
    </div>

    <table id="teamTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Local</th>
          <th>Visitor</th>
          <th>Schedule</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>#</th>
          <th>Local</th>
          <th>Visitor</th>
          <th>Schedule</th>
          <th>Actions</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($matches as $match)
        <tr>
          <th scope="row">{{ $match->id }}</th>
          <td>{{ $match->local_team->name }}</td>
          <td>{{ $match->visitor_team->name }}</td>
          <td>{{ $match->schedule_time }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="...">
              <a href="/match/{{ $match->id }}" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
              <button type="button" class="btn btn-default" id="buttomDelete" data="{{ $match->id }}"><i class="fa fa-trash"></i></button>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
</div>
</div>


<!-- Small modal -->
<div id="modalDelete" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete</h4>
      </div>
      <div class="modal-body">
        <div id="error" class="alert alert-danger alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong></strong>
        </div>
        Are you sure?
      </div>
      <div class="modal-footer">
        {!! csrf_field() !!}
        <button type="button" class="btn btn-default" id="delete" data="">Yes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
@endsection


@section('js')
<!--DataTables [ OPTIONAL ]-->
<script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/js/app.utils.js"></script>
<script>
$(document).ready(function() {
  $('#teamTable').DataTable();
  $("#error").hide();

  $(document).on("click","#buttomDelete", function(){
    $('#modalDelete').modal('show');
    var idTeam = $(this).attr("data");
    $("#delete").attr("data", idTeam);
  });

  $(document).on("click","#delete", function(){
    var id = $(this).attr("data");
    var params = {
      callback : handlerDeleteTeam
    };
    Util.RequestDELETE(params,"/match/"+id);
    console.log("DELETE : " + idTeam);
  });

  function handlerDeleteTeam(response){
    if (!response.error){
      if (response.resultado.success === "Entity deleted")
      {
        location.reload();
      }
      else{
        $("#error").find("strong").append(response.resultado.error);
        $("#error").show();
        $("#error").alert();
      }
    }else{
      $("#error").find("strong").append("Server error. Try Again");
      $("#error").show();
      $("#error").alert();
    }
    console.log(response);
  }
});
</script>
@endsection
