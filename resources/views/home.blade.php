@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="text-center">DASHBOARD</div>
      </div>
      <div class="panel-body">
        <div class="col-sm-12 col-md-4">
          <div class="list-group">
            <a href="/teams" class="list-group-item ">
              <h4 class="list-group-item-heading">TEAMS</h4>
            </a>
            <a href="/matches" class="list-group-item ">
              <h4 class="list-group-item-heading">MATCHES</h4>
            </a>
            <a href="/leagues" class="list-group-item ">
              <h4 class="list-group-item-heading">LEAGUES</h4>
            </a>
            <a href="#" class="list-group-item ">
              <h4 class="list-group-item-heading">COUNTRIES</h4>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-8">
          <video preload="true" loop="true" autoplay="true" class="cover-video" style="opacity: 1; width: 100%;">Your browser does not support the video tag. You should <a href="http://whatbrowser.org/">consider updating</a>.<source src="http://es.ca2016.com/uploads/encodes/uRZ4gtUNAVNFobimNfXFNZOu1uYpgouY/mp4.mp4" type="video/mp4"><source src="http://es.ca2016.com/uploads/encodes/uRZ4gtUNAVNFobimNfXFNZOu1uYpgouY/webm.webm" type="video/webm"></video>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
