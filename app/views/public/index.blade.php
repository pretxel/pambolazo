<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pambolazo</title>

    <link rel="stylesheet" href="{{ URL::asset('stylesheets/app.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('foundation-icons/foundation-icons.css') }}"/>


    <script src="{{ URL::asset('bower_components/modernizr/modernizr.js') }}"></script>
    <script src="{{ URL::asset('bower_components/foundation/js/foundation/foundation.orbit.js') }}"></script>
    <script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/foundation/js/foundation.js') }}"></script>
    <script src="{{ URL::asset('bower_components/foundation/js/foundation/foundation.magellan.js') }}"></script>
    <script src="{{ URL::asset('bower_components/foundation/js/foundation/foundation.orbit.js') }}"></script>
    <script src="{{ URL::asset('bower_components/jquery.cookie/jquery.cookie.js') }}"></script>
    
    
</head>

<body>
	
	<div data-magellan-expedition="fixed">
  <dl class="sub-nav">
  	<dd data-magellan.arrival="in" id="logo"><img src="https://lh3.googleusercontent.com/-f3gI0qLSpxQ/AAAAAAAAAAI/AAAAAAAAA-U/ezXW2h1Dffc/photo.jpg" width="40px"></dd>
    <dd><a href="#build" data-reveal-id="myModal" id="inicioSesion">Iniciar Sesión</a></dd>
    <dd data-magellan-arrival="js"><a href="#js">Registrarse</a></dd>
    <dd data-magellan-arrival="contacto"><a href="#contacto">Contacto</a></dd>
    <dd data-magellan-arrival="caractetisticas"><a href="#caractetisticas">Caracteristicas</a></dd>
    <dd data-magellan-arrival="quees"><a href="#quees">¿Que es?</a></dd>
  </dl>
</div>


	<a name="quees"></a>

<ul class="example-orbit" data-orbit data-magellan-destination="quees">
  <li>
   <p></p>
    <center><button>Registro</button></center>
  </li>
  <li class="active">
    <img src="http://mx.sea-doo.com/content/dam/seadoo/Global/MY2014/Images/Promotions/Promo-community-nike-wake-skate-team.jpg" alt="slide 2" />

  </li>
  <li>
    <img src="https://jornalismofc.files.wordpress.com/2010/06/bandeira-banner.jpg" alt="slide 3" />

  </li>
</ul>





<a name="caractetisticas"></a>
<h3 data-magellan-destination="caractetisticas"></h3>
<div class="row">

  <div class="small-12  medium-6 large-4 columns" style="text-align: center;"><img src="images/Document-Add-01-128.png" width="80px"><p id="tituloParrafo">Genera tu Quiniela</p><p id="cuerpoParrafo">Podrás generar los pronosticos de tu liga favorita.</p></div>
  <div class="small-12  medium-6 large-4 columns" style="text-align: center;"><img src="images/Soccer-128 (1).png" width="80px"><p id="tituloParrafo">Crea tus Ligas</p><p id="cuerpoParrafo">Haz una liga con tus amigos.</p></div>
  <div class="small-12  medium-6 large-4 columns" style="text-align: center;"><img src="images/User-Group-128.png" width="80px"><p id="tituloParrafo">Comparte</p><p id="cuerpoParrafo">Comparte tu liga con tus conocidos, amigos de trabajo, etc.</p></div>


  <div class="small-12 medium-6 large-6 columns" style="text-align: center;"><img src="images/Money-Credit-Card-128.png" width="80px"><p id="tituloParrafo">Gana dinero</p><p id="cuerpoParrafo">Apuesta con tus amigos, de la forma que quieras no hay limites.</p></div>
  <div class="small-12 medium-12 large-6 columns" style="text-align: center;"><img src="images/Bookmark-New-128.png" width="80px"><p id="tituloParrafo">Compite</p><p id="cuerpoParrafo">Obtiene trofeos por cada racha que tengas.</p></div>
</div>

<a name="contacto"></a>


<form data-abide>
	<div class="row">
		<div class="small-12 large-12 columns">
			<h3 data-magellan-destination="contacto">Contacto</h3>
			<label>
				Nombre:
				<input type="text" required pattern="[a-zA-Z]+">
			</label>
			<small class="error">El nombre es requerido.</small>
		</div>
	</div>
	<div class="row">
		<div class="small-12 large-12 columns">
			<label>
				Mensaje:
				<textarea required pattern="[a-zA-Z]+"></textarea>
			</label>
			<small class="error">El Mensaje es requerido.</small>
		</div>
	</div>
	<div class="row">
		<div class="small-12 large-12 columns">
			<button type="submit" class="expand">Submit</button>
		</div>
	</div>
</form>


<div class="row" id="footer">
      <div class="small-12 large-4 columns">

      	<span class="label" style="font-size: 16px;">Privacidad</span><br>
      	<span class="label" style="font-size: 16px;">Condiciones de Uso</span><br>

        


      </div>
      <div class="small-12 large-4 columns">
        <span class="label" style="font-size: 16px;">Acerca De</span><br>

      </div>
      <div class="small-12 large-4 columns">
      <!-- 	<ul>
          <li>Facebook</li>
          <li>Twitter</li>
        </ul> -->
      
  
      </div>

    </div>





<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Iniciar Sesión</h2>
  <form data-abide method="POST" action="/signup">
  <div class="row">
  	<div class="small-12 large-6 columns">
  		<label>
  			Correo electrónico:
  			<input type="email" name="email" required>
  			<small class="error">Correo electrónico requerido o no es valido.</small>
  		</label>
  	</div>
  	<div class="small-12 large-6 columns">
  		<label>
  			Contraseña:
  			<input type="password" name="password" required>
  			<small class="error">Contraseña requerida o no tiene el formato .</small>
  		</label>
  	</div>
  	<div class="small-12 large-12 columns">
  		<button type="submit" class="button expand">Iniciar Sesión</button>
  	</div>
  </div>
  </form>

  <a class="close-reveal-modal">&#215;</a>
</div>


<script type="text/javascript">
    	$(document).foundation();
    </script>
</body>

</html>