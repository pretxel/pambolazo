@extends('layouts.app')

@section('css')

<!--Bootstrap Table [ OPTIONAL ]-->

<link href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <a href="/team" class="btn btn-primary"> New Team</a>

      <div class="panel panel-default">
        <table id="teamTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Logo</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Logo</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($teams as $team)
            <tr>
              <th scope="row">{{ $team->id }}</th>
              <td>{{ $team->name }}</td>
              <td> <img src="pambolazo/teams/{{ $team->logo }}" width="100px" /> </td>
              <td>
                <a href="/team/{{ $team->id }}" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                <button class="btn btn-default" type="submit" id="buttomDelete" data="{{ $team->id }}"><i class="fa fa-trash"></i></button>
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
       <h4 class="modal-title" id="myModalLabel">Delete Team</h4>
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
        <button type="button" class="btn btn-default" id="deleteTeam" data="">Yes</button>
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
      $("#deleteTeam").attr("data", idTeam);
  });

  $(document).on("click","#deleteTeam", function(){
      var idTeam = $(this).attr("data");
      var params = {
        callback : handlerDeleteTeam
      };
      Util.RequestDELETE(params,"/team/"+idTeam);
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

} );
</script>

@endsection
