@extends('layouts.layoutPam')

@section('content')
	





	<div class="row">
		<div class="small-12 large-2 columns"></div>
		<div class="small-12 large-12 columns">
			<center><h1>{{$nameQuiniela}}</h1>	</center>
			<input type="hidden" id="idQuiniela" value="{{$idQuiniela}}">
			<input type="hidden" id="idUserQuiniela" value="{{$idUserQuiniela}}">
			<table id="quiniela" width=100%>
				<thead>	
				<tr> 
					<th colspan="2"> Equipo Local</th>
					<th> Vs</th>
				 	<th colspan="2"> Equipo Visitante</th>
				 </tr>
				</thead>

				 	@foreach ($matches as $match)

				 		<tr id="{{$match[0]->idmatch}}">
				 		<td>
				 			<table id="marcador" width=100%>
				 				<tr>
				 					<td>
				 						<!-- <div id="switchL" class="switch">
										  <input id="teamSwitch{{$match[0]->idTeamL}}" type="radio" name="match{{$match[0]->idmatch}}" class="teamSwitchL">
										  <label for="teamSwitch{{$match[0]->idTeamL}}"></label>
										</div> -->
				 					</td>
				 					<td>
				 					

				 						@if($match[0]->enabled == 0)

				 							<input id="golesL" type="text" placeholder="0" value="{{$match[0]->golesL}}" disabled> 

				 						@else

				 							<input id="golesL" type="text" placeholder="0" value="{{$match[0]->golesL}}"> 

				 						@endif


				 					</td>
				 				</tr>
				 				
				 			</table>	
						</td>
				 		<td><p>
				 				<img src="{{ URL::asset('images/teams') }}/{{$match[0]->imageTL}}" width="30px">
				 		</p>	
				 			
				 			{{$match[0]->nombreTL}}</td>
				 		<td>Vs</td>
				 		<td>
				 			<p>
				 				<img src="{{ URL::asset('images/teams') }}/{{$match[0]->imageTV}}" width="30px">
				 			</p>
				 			
				 			{{$match[0]->nombreTV}}</td>
				 		<td>
				 			<table id="marcador" width=100%>
				 				<tr>
				 					<td>

				 						@if($match[0]->enabled == 0)

				 							<input id="golesV" type="text" placeholder="0" value="{{$match[0]->golesV}}" disabled>

				 						@else

				 							<input id="golesV" type="text" placeholder="0" value="{{$match[0]->golesV}}">

				 						@endif


				 					</td>
				 					<td>
				 						<!-- <div id="switchV" class="switch">
										  <input id="teamSwitch{{$match[0]->idTeamV}}" type="radio" name="match{{$match[0]->idmatch}}" class="teamSwitchV">
										  <label for="teamSwitch{{$match[0]->idTeamV}}"></label>
										</div> -->
				 						 
				 					</td>
				 				</tr>
				 				
				 			</table>
				 			
						</td>
				 	</tr>

				 	@endforeach

			</table>
			<button id="sendQuiniela" class="expand">Guardar</button>

		</div>
		<div class="small-12 large-2 columns"></div>
	</div>
@stop

@section('js')
<script src="{{ URL::asset('js/dashboard.js') }}"></script>

<script type="text/javascript">

	$(document).on('close.fndtn.alert-box', function(event) {
  		console.info('An alert box has been closed!');
	});

</script>
@stop
