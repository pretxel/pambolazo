@extends('layouts.layout')

@section('js')
	<script src="{{ URL::asset('js/eliminatoria.js') }}"></script>
@stop

@section('content')

<div class="row">
	<div class="large-2 columns">.</div>
	<div class="small-12 large-8 columns">
		
		<form>
			<input type="hidden" id="idProno" value="">
			<input type="hidden" id="elimOctavos" value="{{$fase}}">
			<input type="hidden" id="nombre" value="">
			<input type="hidden" id="email" value="">
			<input type="hidden" id="isActivoElim" value="{{$isActivoCierre}}">
			<br>
		<table id="octavos">
			<thead>
				<th>Pasa</th>
				<th>Goles</th>
				<th>Equipo Local</th>
				<th>VS</th>
				<th>Equipo Visitante</th>
				<th>Goles</th>
				<th>Pasa</th>

			</thead>	

	@foreach ($eliminatorias as $elim)
    <tr id="{{$elim->ideliminatorias}}">
    	<td>
    		<div class="switch small">
			  <input id="exampleRadioSwitch{{$elim->equipoL}}" type="radio" name="testGroup{{$elim->ideliminatorias}}">
			  <label for="exampleRadioSwitch{{$elim->equipoL}}"></label>
			</div>
    		</td>
		<td><input type="number" class="golesL" value="0" required></td>
		<td><center><div data-tooltip class="radius success large-10" title="{{$elim->equipoL}}"><img src="{{ URL::asset($elim->imgL)}}"></div></center></td>
		<td>VS</td>
		<td><center><div data-tooltip class="radius success large-8" title="{{$elim->equipoV}}"><img src="{{ URL::asset($elim->imgV)}}"></center></div></td>
		<td><input type="number" class="golesV" value="0" required></td>
		<td><div class="switch small">
		  <input id="exampleRadioSwitch{{$elim->equipoV}}" type="radio" name="testGroup{{$elim->ideliminatorias}}">
		  <label for="exampleRadioSwitch{{$elim->equipoV}}"></label>
		</div></td>
	</tr>
@endforeach


</table>

	<button  type="submit" id="enviarElima" class="button expand">Confirmar</button>
</form>


	</div>
	<div class="large-2 columns">.</div>
</div>


@stop