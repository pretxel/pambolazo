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
			<input type="hidden" id="elimOctavos" value="8">
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
    	<td><input type="checkbox" class="clas{{$elim->ideliminatorias}}" id="checkL{{$elim->equipoL}}" value="L"></td>
		<td><input type="number" class="golesL" value="0" required></td>
		<td><center><div data-tooltip class="radius success large-10" title="{{$elim->equipoL}}"><img src="{{$elim->imgL}}"></div></center></td>
		<td>VS</td>
		<td><center><div data-tooltip class="radius success large-8" title="{{$elim->equipoV}}"><img src="{{$elim->imgV}}"></center></div></td>
		<td><input type="number" class="golesV" value="0" required></td>
		<td><input type="checkbox" class="clas{{$elim->ideliminatorias}}" id="checkV{{$elim->equipoV}}" value="V"></td>
	</tr>
@endforeach


</table>

	<button  type="submit" id="enviarElima" class="button expand">Confirmar</button>
</form>


	</div>
	<div class="large-2 columns">.</div>
</div>


@stop