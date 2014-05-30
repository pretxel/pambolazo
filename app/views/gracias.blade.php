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
<center><h5> Gracias por participar.</h5>
<p>Se te acaba de enviar por correo electróncio el token para accesos futuros:</p>
<table>
<tr>
<td>Token</td>
<td>{{$token}}</td>
</tr>
</table>
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