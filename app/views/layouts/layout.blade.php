<!DOCTYPE html>
<html class="js no-touch no-featurephone" lang="es" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
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
    <link type="text/css" title="standard" rel="stylesheet" href="./copa/font-face.css">
    <link type="text/css" title="standard" rel="stylesheet" href="./copa/base.css">
    <link type="text/css" title="standard" rel="stylesheet" href="./copa/base(1).css">
    <script type="text/javascript" src="./copa/require-2.1.9.js">
    </script>



  {{ HTML::style('css/foundation.css') }}
  {{ HTML::style('css/normalize.css')}}
  {{ HTML::style('css/styles.css')}}    

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
    <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
  </ul>

  
<section class="top-bar-section">
    <ul class="left">
      <li><a href="/" style="font-size: 20px;">Bienvenido: <span id="bienvenidoNombre"></span></h1> </a>

      </li>
      <li class="divider"></li>
    </ul>
    <!-- Right Nav Section -->
    <ul class="right">


        <li class="divider"></li>
      <li><a href="#"><span id="rankingBu">Ranking</span></a></li>
        <li class="divider"></li>
      <li><a href="#">Score: <span id="score"></span></a></li>
      <li class="divider"></li>
      <li><a href="/">Salir</a></li>
    </ul>
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
                <ul> <li>Selecciona los dos equipos de cada grupo que pasarán a la siguiente ronda.</li>
               
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
                        <center><h4>Ya acabo el tiempo para capturar tu quiniela.</h4>
                            <p>Sólo puedes ver las estadísticas ingresando con tu token.</p>
                             <form>
                                <label> Token
                                <input type="password" id="tokenConf" required>
                                </label>    
                                <button  id="confirmarToken" class="button expand">Confirmar</button>
                            </form>

                            <div class="row">
                                <div class="small-6 large-6 columns"></div>
                                <div class="small-6 large-6 columns"><a href="#" data-reveal-id="modalRecuperar">Recuperar Token</a></div>
  
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
                Obtendrás un punto por cada acierto sin importar la posición, si aciertas las posición obtienes 2 puntos por cada equipo.
                Al terminar la fase de grupos, se te acumularán tus puntos obtenidos y se generará una tabla de posiciones.
               </p>
               <h4>¿Puedo cambiar mi quiniela?</h4>
               <p>Si, a partir de Junio podrás hacerlo hasta el día en que inicie el mundial.
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

        <div class="medium-6 columns"><h4>Participantes: {{$total}}</h4></div>
        <div class="medium-6 columns"><h4>Días Faltantes: {{$diasFal}}</h4></div>

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



  <div id="modalRanking" class="reveal-modal" data-reveal style="display:block;">
            <div class="row">
    <div class="large-12 columns">
               

            <center>
                <h1>Ranking</h1> 
                <table id="ranking" style="width: 100%;">
  <thead>
    <tr>
      <th width="10%" style="text-align: center;">Posición</th>
      <th width="70%" style="text-align: center;">Nombre</th>
      <th width="20%" style="text-align: center;">Puntos</th>
    </tr>
  </thead>
  <tbody id="bodyRanking">
    <tr>
      <td>???</td>
      <td>???</td>
      <td>???</td>
    </tr>
    <tr>
      <td>???</td>
      <td>???</td>
      <td>???</td>
    </tr>
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