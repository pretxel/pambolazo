<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="_requires" content="_requires" data-require="lang=es/main">
    <title>Quiniela Mundial Brasil 2014</title>
    <meta http-equiv="Content-Type" content="">
    <meta name="description" content="Pronostica que equipos pasan a la siguiente ronda del Mundial Brasil 2014" />
    <meta name="robots" content="noodp">
    <meta name="googlebot" content="noodp,noarchive,noimageindex" />
    <meta name="keywords" content="">
    <meta name="author" content="Pambolazo">
    <meta property="og:title" content="Quiniela Mundial Brasil 2014"/>
    <meta property="og:site_name" content="Pambolazo"/>
    <meta property="og:type" content="blog"/>
    <meta property="og:description" content="Participa pronosticando que equipos del Mundial pasarán a la siguiente fase y en que posiciones terminan la fase de grupos."/>
    <meta property="og:url" content="http://www.pambolazo.com"/>
    </script>


 {{ HTML::style('copa/font-face.css') }}  
  {{ HTML::style('copa/base.css') }}  
  {{ HTML::style('copa/base(1).css') }}
  {{ HTML::style('css/normalize.css')}}
  {{ HTML::style('css/styles.css')}}    
  {{ HTML::style('css/foundation.css') }}
 

  <script src="{{ URL::asset('copa/require-2.1.9.js') }}"></script>
  <script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>

  <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.blockUI.js') }}"></script>
  <script src="{{ URL::asset('js/validCampoFranz.js') }}"></script>
  <script src="{{ URL::asset('js/utils.js') }}"></script>
  <script src="{{ URL::asset('js/recuperarToken.js') }}"></script>
  <script src="{{ URL::asset('js/ranking.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
  @yield('js')


<style type="text/css">



    .comboTransA,.comboTransB,.comboTransC,.comboTransD,.comboTransE,.comboTransF,.comboTransG,.comboTransH{
        display: none;
    }

    #bienvenido{
        display: none;
    }

    #envabezado{
        width: 1000px;
    margin-left: auto;
    margin-right: auto;
    }

    div.growlUI { background: url(./copa/check48.png) no-repeat 10px 10px }
    div.growlUI h1, div.growlUI h2 {
        color: white; padding: 5px 5px 5px 75px; text-align: left; font-size: 20px;
    }
    
</style>
</head>
<body>

<nav class="top-bar" data-topbar="">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">

    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
<!--     <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li> -->
  </ul>

  
<section class="top-bar-section">
    <ul class="left">
      <li><a href="/" style="font-size: 20px;">Bienvenido: <span id="bienvenidoNombre"></span></h1> </a>

      </li>
    </ul>
    <!-- Right Nav Section -->
    <!-- <ul class="right">


      <li class="divider"></li>
       <li><a href="faseGrupos">Fase de Grupos</a></li>
        <li class="divider"></li>
      <li><a href="#"><span id="rankingBu">Ranking</span></a></li>
        <li class="divider"></li>
      <li><a href="#">Score: <span id="score"></span></a></li>
      <li class="divider"></li>
      <li><span id="salir"><a href="/">Salir</a></span></li>
    </ul> -->
  </section></nav>
  <nav class="top-bar" data-topbar="">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">

    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
  </ul>

  
<section class="top-bar-section">
    <ul class="left">
       
       <!-- <li><a href="/faseGrupos">Fase de Grupos</a></li>
        <li class="divider"></li>-->
        <li><a href="/eliminatorias/8">Octavos</a></li>
        <li class="divider"></li> 
        <li><a href="/eliminatorias/4">Cuartos</a></li>
        <li class="divider"></li>
        <li><a href="/eliminatorias/2">Semifinal</a></li>
        <li class="divider"></li>
    </ul>

    <ul class="right">


        <li class="divider"></li>
      <li><a href="#"><span id="rankingBu">Ranking</span></a></li>
        <li class="divider"></li>
      <li><a href="#">Score: <span id="score"></span></a></li>
      <li class="divider"></li>
      <li><a href="/" id="salir">Salir</a></li>
    </ul>
    <!-- Right Nav Section -->
  </section></nav>
 
	
	@yield('content')



<div id="myModal" class="reveal-modal" data-reveal style="display:block;">
           <!--  <div class="row">
    <div class="large-12 columns">
            <center><h1>Genera tu Quiniela</h1>
                <h4>Por favor proporciona tu Nombre.</h4>
                <p>Debes seleccionar los equipos que crees que van a pasar a la siguiente ronda, si aciertas ganarás 1 pto por cada equipo que pase a la siguiente ronda y si aciertas en la posición de su grupo se te sumará otro 1 pto por cada equipo en su poscición final, al final se acomularan tus puntos.</p></center>
        </div>
  </div> -->
 
    <dl class="accordion" data-accordion>
        <dd>
            <a href="#panel1">Genera tu Quiniela</a>
            <div id="panel1" class="content active">
                 
                @if ($isActivo === 1)
                 <div class="large-12 columns">
            <center><h1>Genera tu Quiniela</h1>
                
               </center>
               <h4>Intrucciones:</h4>
               <p>
                <ul> <li>Selecciona los equipos de cada eliminatoria que pasarán a la siguiente ronda.</li>
               
                <li>
                    Selecciona la posición del equipo que va pasar a la suguiente ronda (1 o 2).
                </li>
                <li>
                    ¡Envia tu Quiniela!
                </li>
                 </ul>
               </p>
            
                 </div>

                <div class="row">
                    <form>
                        <label> Correo Electrónico
                            <input type="email" id="emailConf" required>
                        </label> 
                        <label> Alias ó Nombre
                            <input type="text" id="nombreConf" required>
                        </label>     
                        <button type="submit" id="confirmar" class="button expand">Confirmar</button>
                    </form>
                </div>
                <p>NOTA: Tú alias sera publicado en los scores, por lo que no es recomendado agregar información personal.
                </p>
                @else
                        @if($isActivoCierre === 0)
                        <center><h4>Ya acabo el tiempo para capturar tu quiniela.</h4>
                            <p>Sólo puedes ver las estadísticas ingresando con tu token.</p>
                        @else
                        <center><h4>Quiniela para Final y Tercer Lugar</h4>
                            <p>Agrega tu quiniela para la final y tercer lugar con marcadores finales.</p>
                        @endif
                             <form>
                                <label> Token
                                <input type="password" id="tokenConf" required>
                                </label>    
                                <button  id="confirmarToken" class="button expand">Confirmar</button>
                            </form>

                            <div class="row">
                                <div class="small-6 large-6 columns">
                                  @if($isActivoCierre === 1)

                                    <button class="small round button expand success" data-reveal-id="modalNuevo">Soy Nuevo</button>
                                  @endif
                                </div>
                                <div class="small-6 large-6 columns"><button class="small round button expand alert" data-reveal-id="modalRecuperar">Recuperar Token</button></div>
  
                            </div>
                            
                        </center>
                @endif
                 
            </div>
        </dd>
         <dd>
            <a href="#panel2">Tengo dudas</a>
            <div id="panel2" class="content">
                <div class="row">
   <h4>¿Como funciona?</h4>
               <p>
                El sistema de puntuación es el siguiente:
                <ul>
                  <li>5 puntos por partido que se acierte a quien gane.</li>
                  <li>2 puntos si se acierta en goles a favor, de uno de los dos equipos</li>
                  <li>10 puntos si se acierta en el marcador </li>
                </ul>
                <p>Estos marcadores son hasta los 120 minutos si es que hay tiempo extra.</p>
               </p>
               <h4>¿Puedo cambiar mi quiniela?</h4>
               <p>Si.
               </p>
            </div>
        </dd>
       <!--   <dd>
            <a href="#panel3">Tengo token</a>
            <div id="panel3" class="content">
                <div class="row">
   <form>
        <label> Token
            <input type="text" id="tokenConf" required>
        </label>    
        <button  id="confirmarToken" class="button expand">Confirmar</button>
    </form>
    </div>
            </div>
        </dd> -->
    </dl>
    <div class="row">

      


        <div class="medium-6 columns"><div data-alert class="alert-box info">
 Participantes: {{$total}}
  <a href="#" class="close">&times;</a>
</div></div> 
        <div class="medium-6 columns"><div data-alert class="alert-box info">
Días Faltantes para cierre: {{$diasFal}}
  <a href="#" class="close">&times;</a>
</div></div>

    </div>
</div>

<div id="myModalError" class="reveal-modal" data-reveal style="display:block;">
            <div class="row">
    <div class="large-12 columns">
            <center><h2>Te Faltan equipos.</h2></center>
        </div>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>


<div id="modalRecuperar" class="reveal-modal" data-reveal style="display:block;">
            <div class="row">
    <div class="large-12 columns">
            <p>Te enviaremos un correo para que puedas cambiar tu token.</p>    

            <center>
                <form>
                    <label>Correo Electrónico</label>
                    <input type="email" name="emailRecu" id="emailRecu">
                    <button  id="enviarRecu" class="button expand">Confirmar</button>
                </form>
            </center>
        </div>
  </div>
  <a class="close-reveal-modal" data-reveal-id="myModal" >&#215;</a>
</div>


<div id="modalNuevo" class="reveal-modal" data-reveal style="display:block;">
           <div class="large-12 columns">
            <center><h1>Genera tu Quiniela</h1>
                
               </center>
               <h4>Intrucciones:</h4>
               <p>
                <ul> <li>Selecciona los equipos de cada eliminatoria que pasarán a la siguiente ronda.</li>
               
                <li>
                    Agrega el marcador y en caso de empate selecciona que equipo pasa a la siguiente ronda.
                </li>
                <li>
                    ¡Envia tu Quiniela!
                </li>
                 </ul>
               </p>
            
                 </div>

                <div class="row">
                    <form>
                        <label> Correo Electrónico
                            <input type="email" id="emailConf" required>
                        </label> 
                        <label> Alias ó Nombre
                            <input type="text" id="nombreConf" required>
                        </label>     
                        <button type="submit" id="confirmar" class="button expand">Confirmar</button>
                    </form>
                </div>
                <p>NOTA: Tú alias sera publicado en los scores, por lo que no es recomendado agregar información personal.
                </p>
  <a class="close-reveal-modal" data-reveal-id="myModal" >&#215;</a>
</div>


  <div id="modalRanking" class="reveal-modal" data-reveal style="display:block;">
            

    <!-- <ul class="example-orbit-content" data-orbit> -->
  <!-- <li data-orbit-slide="headline-1">
    
    <div class="row">
    <div class="large-12 columns">
               

            <center>
                <h1>Tabla de Posiciones</h1>
                <p>Las siguientes tablas de posiciones son por cada fase del Mundial.</p>
                <a href="#" class="button [radius round]">Mostrar Ranking</a>
            </center>
        </div>
  </div>

    <div class="orbit-caption"></div>
  </li> -->
 <!--  <li data-orbit-slide="headline-2"> -->
   
   <div class="row">
    <div class="large-12 columns">
               

            <center>
                <h1>Ranking fase Cuartos de Final</h1> 
                <table id="ranking" style="width: 100%;">
  <thead>
    <tr>
      <th width="10%" style="text-align: center;">Posición</th>
      <th width="70%" style="text-align: center;">Nombre</th>
      <th width="20%" style="text-align: center;">Puntos</th>
    </tr>
  </thead>
  <tbody id="bodyRankingFinal">
    <tr>
      <td>???</td>
      <td>???</td>
      <td>???</td>
    </tr>
  </tbody>
</table>
            </center>
        </div>
  </div>
   <!--  <div class="orbit-caption"></div>
  </li> -->
 <!--  <li data-orbit-slide="headline-3" >
    
    <div class="row">
    <div class="large-12 columns">
               

            <center>
                <h1>Ranking fase Octavos de Final</h1> 
                <table id="ranking" style="width: 100%;">
  <thead>
    <tr>
      <th width="10%" style="text-align: center;">Posición</th>
      <th width="70%" style="text-align: center;">Nombre</th>
      <th width="20%" style="text-align: center;">Puntos</th>
    </tr>
  </thead>
  <tbody id="bodyRankingOctavos">
    <tr>
      <td>???</td>
      <td>???</td>
      <td>???</td>
    </tr>
  </tbody>
</table>
            </center>
        </div>
  </div>

    <div class="orbit-caption"></div>
  </li> -->
<!-- </ul> -->
      
  <a class="close-reveal-modal">&#215;</a>
</div>

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51477715-1', 'pambolazo.com');
  ga('send', 'pageview');

</script>
</body>
</html>