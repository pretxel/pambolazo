<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pambolazo 2015</title>

    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/foundation-icons/foundation-icons.css') }}"/>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}"/>

    <script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/fastclick.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.cookie.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/placeholder.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.blockUI.js') }}"></script>


    <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
    <script src="{{ URL::asset('js/Gina.Framework.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('js/formajaxsubmit.js') }}"></script>
    <script src="{{ URL::asset('js/index.js') }}"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- A -->

    
</head>

<body>


       
      <div class="row">
        <div class="small-12 medium-4 large-6 columns namelogo">
          <h1><img src="{{ URL::asset('images/logo.png') }}" style="width: 60px;"> Pambolazo</h1>
        </div>
        <div class="small-12 medium-8 large-6 columns">
          <div class="nav-bar">
            <ul class="button-group">
            <li><a href="#about" class="button">¿Que es Pambolazo?</a></li>
           
            <!-- <li><a href="#" class="button">Contacto</a></li> -->
            </ul>
          </div>
        </div>
      </div>
        
      <div class="hero">
        <div class="row">
        	<div class="large-12 intro-pam">
            <h3 style="color: white;">¡Bienvenido a Pambolazo!<br>Accede a la plataforma para llenar tu quiniela</h3>
          </div>
          <div class="large-12 columns intro-text">
            <button class="button expand crearCuenta" data-reveal-id="modalCrearCuenta">Entrar a la Plataforma</button>
          </div>
          <!-- <div class="large-6 columns intro-text">
            <button class="button expand ingresar" data-reveal-id="modalIngresar">Ingresar</button>
          </div> -->
        </div>
      </div>

      <div class="row about">
        <div class="medium-6 large-8 columns">
          <h4>¿Que es Pambolazo?</h4>
          <p>Es un proyecto independiente de quinielas enfocado al futbol soccer donde podrás competir con tus amigos.</p>
          <p>
          	En esta plataforma se publicarán partidos de las ligas más importantes para que puedas llenar los marcadores de los partidos y de esta forma ganar puntos.
          </p>
        </div>
        <div class="medium-6 large-4 columns">
          <img src="{{ URL::asset('images/trofeo.png') }}">
        </div>
      </div>

    

 

      <footer class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-6 columns">
              
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
               <!--  <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacidad</a></li>
                <li><a href="#">Suscribir</a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </footer>



      <div id="modalCrearCuenta" class="reveal-modal" data-reveal style="display:block;">
        <div class="row">
        	<div class="large-12 columns">
        	<dl class="tabs" data-tab>
        		<dd><a href="#panel1">No tengo Cuenta</a></dd>
        		<dd class="active"><a href="#panel2">Accede a la Plataforma</a></dd>
        	</dl>

        	<div class="tabs-content">
        		<div class="content" id="panel1">
        			<p style="font-size: 20px;">¡Eres nuevo! Por favor llena los campos obligatorios</p>    
				<center>
                <form action="/signup" method="POST" data-abide>
                  
                    <label>Correo Electrónico*
                      <input type="email" name="email" id="emailRecu">

                    </label>
                    <small class="error">Correo electrónico requerido.</small>
                    <label>Constraseña* (mínimo 5 caracteres o dígitos)
                      <input type="password" name="password" id="password">

                    </label>
                    <small class="error">Contraseña requerida.</small>
                    <label>Confirma Constraseña*
                      <input type="password" name="confirm_password" id="confirm_password">
                    </label>
                    <small class="error">Confirma la contraseña.</small>
                    <button type="submit" id="enviaSus" class="button expand" value="Enviar"><i class="fi-check"></i> Enviar</button>
                 
                </form>
            	</center>


        		</div>
        		<div class="content active" id="panel2">

        			<p style="font-size: 20px;">Accede a la plataforma</p>    

		            <center>
		                <form action="/login" method="POST" data-abide>
		                    <label>Correo Electrónico*
                           <input type="email" name="emailSe" id="emailSe">
                        </label>
                        <small class="error">Correo Electrónico requerido.</small>
		                    <label>Constraseña*
                          <input type="password" name="passwordSe" id="passSe">
                        </label>
                        <small class="error">Contraseña requerida.</small>
		                    <button type="submit" id="iniciaSes" class="button expand"><i class="fi-check"></i> Inicia Sesión</button>
		                </form>
		            </center>
		            <p><a href="#" data-reveal-id="modalRecu">Recuperar Contraseña</a></p>
        		</div>
        	</div>
        	</div>
  		</div>
  		<a class="close-reveal-modal" data-reveal-id="myModal" >&#215;</a>
	</div>


<div id="modalRecu" class="reveal-modal" data-reveal style="display:block;">
            <div class="row">
    <div class="large-12 columns">
            <p style="font-size: 20px;">Recupera tu Contraseña ingresando tu correo de usuario.</p>    

            <center>
                <form action="/recuperaPass" method="POST">
                    <label>Correo Electrónico</label>
                    <input type="email" name="emailRecu" id="emailRecu">
                    <button type="submit" id="enviaRecu" class="button expand"><i class="fi-check"></i> Enviar</button>

                </form>
            </center>

        </div>
  </div>
  <a class="close-reveal-modal" data-reveal-id="myModal" >&#215;</a>
</div>

<center><ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-1098294754637557"
     data-ad-slot="1200140628"></ins></center>


<script type="text/javascript">
    	$(document).foundation();
    	
    </script>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51477715-1', 'auto');
      ga('send', 'pageview');

    </script>

    


<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</body>
</html>