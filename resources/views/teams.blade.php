@extends('layouts.app')

@section('css')

<!--Bootstrap Table [ OPTIONAL ]-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet">

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
                <button class="btn btn-default" type="submit"><i class="fa fa-pencil"></i></button>
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
       Are you sure?
     </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-default" id="deleteTeam" data="">Yes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
@endsection


@section('js')
<!--DataTables [ OPTIONAL ]-->
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $('#teamTable').DataTable();

  $(document).on("click","#buttomDelete", function(){
      $('#modalDelete').modal('show');
      var idTeam = $(this).attr("data");
      $("#deleteTeam").attr("data", idTeam);
  });

  $(document).on("click","#deleteTeam", function(){
      var idTeam = $(this).attr("data");
      console.log("DELETE : " + idTeam);
  });

} );
</script>

@endsection
