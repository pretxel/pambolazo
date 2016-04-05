@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/bower_components/carousel-3d/dist/styles/jquery.carousel-3d.default.css" />
<link href="{{ elixir('css/home.css') }}" rel="stylesheet">

@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-12">
      <div id="wrapper">
        <div id="myCarousel" data-carousel-3d>
          <img src="http://texassouthwestmetal.com/components/com_rdautos/assets/images/unavailable.png" />
          <img src="http://texassouthwestmetal.com/components/com_rdautos/assets/images/unavailable.png" />
          <img src="http://texassouthwestmetal.com/components/com_rdautos/assets/images/unavailable.png" />
          <img src="http://texassouthwestmetal.com/components/com_rdautos/assets/images/unavailable.png" />
          <img src="http://texassouthwestmetal.com/components/com_rdautos/assets/images/unavailable.png" />
          <img src="http://texassouthwestmetal.com/components/com_rdautos/assets/images/unavailable.png" />

          <!-- <div>
            <img src="http://premier-league.xyz/wp-content/uploads/2015/01/chelsea-fc-logo-2.jpg" style="width: 30%;">
            <img src="http://premier-league.xyz/wp-content/uploads/2015/01/chelsea-fc-logo-2.jpg" style="width: 30%;">
          </div> -->

        </div>
      </div>
    
    </div>


  </div>
</div>
@endsection

@section('js')
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/javascript-detect-element-resize/jquery.resize.js"></script>
<script src="/bower_components/waitForImages/dist/jquery.waitforimages.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="/bower_components/carousel-3d/dist/jquery.carousel-3d.min.js" ></script>
@endsection
