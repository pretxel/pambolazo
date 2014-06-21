<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¡Gracias por Participar!</title>
 
  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  {{ HTML::style('css/foundation.css') }}
  {{ HTML::style('css/normalize.css')}}
  {{ HTML::style('css/styles.css')}}	

  <script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>
 
</head>
<body>
 

<div class="panel">
<center><h5> Actualización Correcta</h5>
<p>Para ver tus cambios ingresa a la aplicación con tu token y verifica que estan tus cambios.</p>
<a href="/" class="button [secondary success alert]">Regresar</a>
</center>
</div>


  <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>