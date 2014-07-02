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
  <script src="{{ URL::asset('js/utils.js') }}"></script>
  <script src="{{ URL::asset('js/recuperarToken.js') }}"></script>
  <script src="{{ URL::asset('js/ranking.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
  


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

    .primero{
    background: rgb(140, 228, 182);
}

.segundo{
    background: rgb(252, 159, 148);
}
    
</style>



   
</head>




<body class="es">
   
    
    <div id="wrap">
        
        <div class="navbar navbar-sectionheader" data-reducedurl="/worldcup/library/edition2014/menu/_menu.html">

    
        <div id="content-wrap">
            <div class="container">
                <div class="hidden-print page-brand sponsor-main johnsonandjohnson">
                    <div class="header-wrap ">
                        <div class="title-wrap">
                            <h1 class="title">
                                <center><span>Quiniela Mundial Brasil 2014</span></center>
                            </h1>
                        </div>
                    </div>
                </div>
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
      <li><a href="#" style="font-size: 20px;">Bienvenido: <span id="bienvenidoNombre"></span></h1> </a>

      </li>
      <li class="divider"></li>
    </ul>
    <!-- Right Nav Section -->
    <ul class="right">

        <li class="divider"></li>
        <li><a href="#"><span id="rankingBu">Ranking</span></a></li>
        @if ($isActivoOct === 0)
            <li class="divider"></li>
            <li><a href="eliminatorias">Octavos</a></li>
        @endif
        <li class="divider"></li>
      <li><a href="#">Score: <span id="score"></span></a></li>
      <li class="divider"></li>
      <li><a href="/"><span id="salir">Salir</span></a></li>
    </ul>
  </section></nav>
                
                <form id="postGuarda" action="pronosticos/guarda" method="POST">
                <div class="row ">
                    <div class="col-xs-12 clear-grid ">
                        <div class="module" id="standings">
                            <script type="seo-override">
                            </script>
                            <div class="inner" data-require="lang=es/worldcup/groups">
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255933">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255933/index.html">Grupo A</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo A</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>


                                                
                                                 

                                                <tr class="primero">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/bra.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Brasil</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                        
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Brasil']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Brasil']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Brasil']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoA" name="brasil" class="checkGrupoA" value="7">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransA" id="seleBrasil" name="seleBrasil">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>
                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43924"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/cro.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Croacia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Croacia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Croacia']}}%"></span>
                                                                 <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Croacia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoA" name="croacia" class="checkGrupoA" value="13">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransA" id="seleCroacia" name="seleCroacia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>


                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43938"></td>
                                                </tr>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/mex.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">México</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Mexico']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Mexico']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Mexico']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoA" name="mexico" class="checkGrupoA" value="25">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransA" id="seleMexico" name="seleMexico">
                                                           <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>


                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43911"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/cmr.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Camerún</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Camerun']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Camerun']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Camerun']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoA" name="camerun" class="checkGrupoA" value="8">
                                                    </td>

                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransA" id="seleCamerun" name="seleCamerun">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43849"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255935">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255935/index.html">Grupo B</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo B</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/esp.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">España</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Espana']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Espana']}}%"></span>
                                                                 <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Espana']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoB" name="españa" class="checkGrupoB" value="16">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransB" id="seleEspaña" name="seleEspaña">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43969"></td>
                                                </tr>
                                                <tr class="primero">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/ned.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Países Bajos</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                     <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Paises Bajos']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Paises Bajos']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Paises Bajos']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoB" name="holanda" class="checkGrupoB" value="27">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransB" id="seleHolanda" name="seleHolanda">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43960"></td>
                                                </tr>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/chi.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Chile</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Chile']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Chile']}}%"></span>
                                                                 <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Chile']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoB" name="chile" class="checkGrupoB" value="9">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransB" id="seleChile" name="seleChile">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43925"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/aus.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Australia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                     <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Australia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Australia']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Australia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoB" name="australia" class="checkGrupoB" value="4">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransB" id="seleAustralia" name="seleAustralia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43976"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255937">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255937/index.html">Grupo C</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo C</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="primero"> 
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/col.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Colombia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                     <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Colombia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Colombia']}}%"></span>
                                                                 <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Colombia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoC" name="colombia" class="checkGrupoC" value="10">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransC" id="seleColombia" name="seleColombia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43926"></td>
                                                </tr>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/gre.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Grecia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Grecia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Grecia']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Grecia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoC" name="grecia" class="checkGrupoC" value="19">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransC" id="seleGrecia" name="seleGrecia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43949"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/civ.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Costa de Marfil</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Costa de Marfil']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Costa de Marfil']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Costa de Marfil']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoC" name="costaMarfil" class="checkGrupoC" value="11">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransC" id="seleCostaM" name="seleCostaM">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43854"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/jpn.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Japón</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Japon']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Japon']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Japon']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoC" name="japon" class="checkGrupoC" value="24">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransC" id="seleJapon" name="seleJapon">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43819"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255939">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255939/index.html">Grupo D</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo D</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/uru.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Uruguay</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Uruguay']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Uruguay']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Uruguay']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoD" name="uruguay" class="checkGrupoD" value="32">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransD" id="seleUruguay" name="seleUruguay">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43930"></td>
                                                </tr>
                                                <tr class="primero">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/crc.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Costa Rica</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Costa Rica']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Costa Rica']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Costa Rica']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoD" name="costaRica" class="checkGrupoD" value="12">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransD" id="seleCostaR" name="seleCostaR">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43901"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/eng.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Inglaterra</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Inglaterra']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Inglaterra']}}%"></span>
                                                                 <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Inglaterra']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoD" name="inglaterra" class="checkGrupoD" value="21">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransD" id="seleInglaterra" name="seleInglaterra">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43942"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/ita.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Italia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Italia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Italia']}}%"></span>
                                                                 <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Italia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoD" name="italia" class="checkGrupoD" value="23">
                                                        
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransD" id="seleItalia" name="seleItalia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43954"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255941">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255941/index.html">Grupo E</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo E</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/sui.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Suiza</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Suiza']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Suiza']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Suiza']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoE" name="suiza" class="checkGrupoE" value="31">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransE" id="seleSuiza" name="seleSuiza">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43971"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/ecu.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Ecuador</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Ecuador']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Ecuador']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Ecuador']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoE" name="ecuador" class="checkGrupoE" value="14">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransE" id="seleEcuador" name="seleEcuador">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43927"></td>
                                                </tr>
                                                <tr class="primero">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/fra.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Francia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Francia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Francia']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Francia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoE" name="francia" class="checkGrupoE" value="17">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransE" id="seleFrancia" name="seleFrancia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43946"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/hon.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Honduras</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Honduras']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Honduras']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Honduras']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoE" name="honduras" class="checkGrupoE" value="20">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransE" id="seleHonduras" name="seleHonduras">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43909"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255943">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255943/index.html">Grupo F</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo F</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="primero">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/arg.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Argentina</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Argentina']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Argentina']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Argentina']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoF" name="argentina" class="checkGrupoF" value="3">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransF" id="seleArgentina" name="seleArgentina">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43922"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/bih.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Bosnia y Herzegovina</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Bosnia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Bosnia']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Bosnia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoF" name="bosnia" class="checkGrupoF" value="6">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransF" id="seleBosnia" name="seleBosnia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="44037"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/irn.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Irán</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Iran']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Iran']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Iran']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoF" name="iran" class="checkGrupoF" value="22">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransF" id="seleIran" name="seleIran">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43817"></td>
                                                </tr>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/nga.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Nigeria</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Nigeria']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Nigeria']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Nigeria']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoF" name="nigeria" class="checkGrupoF" value="26">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransF" id="seleNigeria" name="seleNigeria">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255945">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255945/index.html">Grupo G</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo G</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="primero">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/ger.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Alemania</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Alemania']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Alemania']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Alemania']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoG" name="alemania" class="checkGrupoG" value="1">
                                                    </td>
                                                    <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransG" id="seleAlemania" name="seleAlemania">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43948"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/por.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Portugal</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Portugal']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Portugal']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Portugal']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoG" name="portugal" class="checkGrupoG" value="28">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransG" id="selePortugal" name="selePortugal">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43963"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/gha.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Ghana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Ghana']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Ghana']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Ghana']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoG" name="ghana" class="checkGrupoG" value="18">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransG" id="seleGhana" name="seleGhana">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43860"></td>
                                                </tr>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/usa.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">EEUU</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['EEUU']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['EEUU']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['EEUU']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoG" name="usa" class="checkGrupoG" value="15">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransG" id="seleEEUU" name="seleEEUU">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43921"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="group-wrap">
                                    <div class="anchor">
                                        <table class="table tbl-standings" id="255947">
                                            <caption class="caption-link"><a href="http://es.fifa.com/worldcup/groups/group=255947/index.html">Grupo H</a>
                                            </caption>
                                            <caption class="caption-nolink">Grupo H</caption>
                                            <thead>
                                                <tr>
                                                    <th class="tbl-teamname teamname-nolink">Equipos</th>
                                                    <th class="tbl-teamname teamname-nolink"></th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Votar</abbr>
                                                    </th>
                                                    <th class="tbl-matchplayed">
                                                        <abbr title="Partidos jugados">Posición</abbr>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="primero">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/bel.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Bélgica</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Belgica']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Belgica']}}%"></span>
                                                                 <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Belgica']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoH" name="belgica" class="checkGrupoH" value="5">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransH" id="seleBelgica" name="seleBelgica">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43935"></td>
                                                </tr>
                                                <tr class="segundo">
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/alg.png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Argelia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Argelia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Argelia']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Argelia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoH" name="argelia" class="checkGrupoH" value="2">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransH" id="seleArgelia" name="seleArgelia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43843"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/rus(1).png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">Rusia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Rusia']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Rusia']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Rusia']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoH" name="rusia" class="checkGrupoH" value="30">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransH" id="seleRusia" name="seleRusia">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43965"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-teamname teamname-nolink">
                                                        <div class="t">
                                                            <div class="t-i i-4">
                                                                <span class="t-i-wrap">
                                                                    <img alt="" src="./copa/kor(1).png" class="i-4-flag flag">
                                                                </span>
                                                            </div>
                                                            <div class="t-n">
                                                                <span class="t-nText">República de Corea</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="tbl-teamname teamname-nolink" style="width: 30%;vertical-align: middle;">
                                                        @if ($isActivo === 0)
                                                            <div data-tooltip class="radius progress success large-8" title="{{$estadisticas['porcentajes']['Republica Corea']}}%">
                                                                <span class="meter" style="width: {{$estadisticas['porcentajes']['Republica Corea']}}%"></span>
                                                                <span class="[success alert secondary] [round radius] label">{{$estadisticas['votos']['Republica Corea']}} votos</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="tbl-matchplayed">
                                                        <input type="checkbox" id="grupoH" name="corea" class="checkGrupoH" value="29">
                                                    </td>
                                                     <td class="tbl-matchplayed" style="display: list-item;list-style-type: tibetan;">
                                                         <select class="comboTransH" id="seleCorea" name="seleCorea">
                                                            <option value="0">selecciona</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>  
                                                    </td>

                                                </tr>
                                                <tr class="expandcol hidden">
                                                    <td colspan="11" data-idteam="43822"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="nombre" id="nombre" value="">
                     <input type="hidden" name="email" id="email" value="">
                     <input type="hidden" name="upt" id="upt" value="0">
                     <input type="hidden" name="pronosticosId" id="pronosticosId" value="">
                    @if ($isActivo === 1)
                        <button type="submit" id="enviar" class="button expand">Enviar</button>
                    @else
                       <!--  <button type="button" id="estadisticasButton" class="button expand">Estadisticas</button> -->
                    @endif
                </div>



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




            </form>
            </div>
        </div>

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