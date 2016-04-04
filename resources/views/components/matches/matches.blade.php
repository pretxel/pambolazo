@extends('layouts.app')

@section('css')

<!--Bootstrap Table [ OPTIONAL ]-->

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
  <div class="panel panel-default">
  <div class="panel-body">
      <a href="/match" class="btn btn-primary"> New Match</a>
  </div>
</div>


  <div class="panel panel-default">
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
            <a href="/match/{{ $match->id }}" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
            <button class="btn btn-default" type="submit" id="buttomDelete" data="{{ $match->id }}"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>

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
});
</script>
@endsection
