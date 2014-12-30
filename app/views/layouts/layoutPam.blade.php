<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/foundation-icons/foundation-icons.css') }}"/>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" />
    <!-- <link rel="stylesheet" href="{{ URL::asset('stylesheets/app.css') }}" /> -->
    <script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>
</head>

<body>
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="left-small">
                    <a class="left-off-canvas-toggle step fi-list size-48" style="color: white;" href="#">
                        <span></span>
                    </a>
                </section>

                <section class="right-small">
                    <a href="/logout" style="color: white; text-align: center; vertical-align: text-top;"><i class="step fi-power size-36"></i></a>
                </section>

                <section class="middle tab-bar-section">

                    <div class="cajaMenu"><img src="{{ URL::asset('images/logo.png') }}" width="40px" style="color:white;">&nbsp;&nbsp;&nbsp;Pambolazo</div>
                    <div class="cajaUsuario"><i class="step fi-torso size-36"></i> {{$User->alias}}</div>
                </section>
            </nav>

            <aside class="left-off-canvas-menu">
                <ul class="off-canvas-list">
                    <li>
                        <label>Dashboard</label>
                    </li>
                    <li><a href="/dashborad">Mi Dashboard</a>
                    </li>
                </ul>
                <ul class="off-canvas-list">
                    <li>
                        <label>Perfil</label>
                    </li>
                    <li><a href="/perfil">Datos Personales <i class="fi-torso large"></i></a>
                    </li>
                </ul>
                <ul class="off-canvas-list">
                    <li>
                        <label>Ligas</label>
                    </li>

                </ul>
            </aside>


            <section class="main-section" align="center" style="height: 600px;">
                <br>
                <br>

                 @yield('content')


            </section>



            <a class="exit-off-canvas"></a>

        </div>
    </div>

    <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
    <script src="{{ URL::asset('js/foundation/foundation.joyride.js') }}"></script>
    <script src="{{ URL::asset('js/foundation/foundation.alert.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.cookie.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.blockUI.js') }}"></script>
    <script src="{{ URL::asset('js/Gina.Framework.js') }}"></script>
    <script type="text/javascript">
    $(document).foundation();
    
    </script>
    @yield('js')
</body>

</html>