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
  <script src="{{ URL::asset('js/main.js') }}"></script>
  

</head>

<body>

  <form data-abide action="/token/update" method="POST">
  <div class="password-field">
    <label>Nueva Contraseña <small>requerido</small>
      <input type="password" name="password" id="password" required>
    </label>
    <small class="error">Tu contraseña deben contener carácteres.</small>
  </div>
  <div class="password-confirmation-field">
    <label>Confirma la contraseña <small>requerido</small>
      <input type="password" required pattern="[a-zA-Z]+" data-equalto="password">
    </label>
    <small class="error">El token no coincide</small>
  </div>
  <input type="hidden" name="token" value="{{$token}}">
  <button type="submit">Guardar</button>
</form>

</body>

</html>
