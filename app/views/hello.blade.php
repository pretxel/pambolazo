@extends('layouts.layout')

@section('content')
		<div class="row" style="text-align: center;">
		<div class="large-5 columns">
      		<label>{{$equipoL}}<br>
      			<img class="foto" src="{{asset('img/sample.png')}}"><br>
      			<a href="#" data-reveal-id="myModal" class="button [radius round]">Votar</a>
      		</label>
    	</div>
    	<div class="large-2 columns">
      		<label>
      			<h1>VS</h1>
      		</label>
    	</div>
    	<div class="large-5 columns">
      		<label>{{$equipoV}}<br>
      			<img class="foto" src="{{asset('img/sample.png')}}"><br>
      			<a href="#" data-reveal-id="myModal" class="button [radius round]">Votar</a>
      		</label>
    	</div>

    	<!-- <a href="#" data-reveal-id="myModal" class="radius button">Example Modal…</a> -->


    	<div id="myModal" class="reveal-modal" data-reveal>
    		<div class="row">
  	<div class="large-12 columns">
      		<center><h1>Registro</h1></center>
    	</div>
  </div>
  <div class="row">
  	<div class="large-6 columns">
      		<a href="#" class="button expand">Faceook</a>
    	</div>
    	<div class="large-6 columns">
      		<a href="#" class="button expand">Registro</a>
    	</div>
  </div>
</div>
	</div> 
@stop