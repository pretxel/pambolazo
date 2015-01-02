@extends('layouts.layoutPam')

@section('content')
                 <div class="row">
                     <div class="small-2 large-2 columns">
                        <img src="{{ URL::asset('images/icon-soccer.png') }}" width="60px" class="right">
                     </div>
                     <div class="small-10 large-10 columns">
                        <h1 class="left">Mi Dashboard</h1>
                     </div>
                 </div>
                 <br>

                <div class="row">

                    <ol class="joyride-list" data-joyride>
                        <li data-id="firstStop" data-text="Siguiente" data-options="tip_location: top; prev_button: false">
                            <h4>Crea tu perfil</h4>
                            <p>Agrega tu perfil.</p>
                        </li>
                        <li data-id="numero1" data-class="custom so-awesome" data-text="Siguiente" data-prev-text="Anterior">
                            <h4>Crear Liga</h4>
                            <p>Crea una liga con tus amigos.</p>
                        </li>
                        <li data-button="Terminar" data-options="prev_button: false">
                            <h4>¡Listo!</h4>
                            <p>Empieza a capturar tu quiniela</p>
                        </li>
                    </ol>

                    <div class="small-16 large-4 columns">
                        <ul class="pricing-table" data-equalizer-watch="" >
                            <li class="title">Datos Perfil</li>
                            <li class="bullet-item">Alias: {{$User->alias}}</li>
                            <li class="bullet-item">Email: {{$User->email}}</li>
                            <li class="bullet-item">Equipo Favorito: {{$User->equipoFav}}</li>
                            <li class="bullet-item">
                                <a id="firstStop" class="button" href="/perfil">Modificar</a>
                            </li>
                        </ul>
                    </div>

                    <div class="small-16 large-8 columns">
                        <!-- <h1>Ligas</h1> -->

                        <ul class="pricing-table" data-equalizer-watch="" >
                            <li class="title">Ligas</li>
                          
                            
                        </ul>


                        @foreach ($leagues as $league)


                    <div class="large-3 columns">
                        
                        
                        <div class="panel">
                            <p>
                                <img id="ligaC" src="{{ URL::asset('images') }}/{{$league->image}}" idLeague="{{$league->idleague}}">
                            </p>
                        </div>
                        
                    </div>

                    @if(count($leagues) % 2 == 1)
                        <div class="large-3 columns">
                       
                        </div>
                    @endif

                    @endforeach

                    </div>
                    
                    
                   <!--  <div class="large-3 columns">
                       
                    </div>
 -->
                    


                    <!-- <div id="numero1" class="small-14 large-6 columns"><a href="/nuevaLiga" class="button expand">Crea tu Liga</a>
                    </div> -->


                </div>



@stop

@section('js')
<script src="{{ URL::asset('js/dashboard.js') }}"></script>
<script type="text/javascript">
    @if ($User->tuto == 0) 
        $(document).foundation({
          joyride: {
            post_ride_callback : function () {
              desactiveTuto({{$User->id}})
            }
          }
         }).foundation('joyride', 'start');
        // $(document).foundation('joyride', 'start');
    @endif
</script>
@stop
            