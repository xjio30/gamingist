<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gamingist - ¿Juegas o Compites?</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >

        <!-- Plugin CSS -->
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css" >

        <!-- Custom CSS -->
        <link href="{{ asset('css/creative.css') }}" rel="stylesheet" type="text/css" >

        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    </head>
    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Gamingist beta</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Identificarse</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        @yield('content')


        <!-- JavaScripts -->
        <!-- jQuery -->  
        <script src=" {{ asset('js/jquery.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fittext.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/creative.js') }}"></script>

        <!-- child of the body tag -->
        <span id="top-link-block" class="hidden">
            <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop: 0}, 'slow');return false;">
                <i class="glyphicon glyphicon-chevron-up"></i> Volver arriba
            </a>
        </span><!-- /top-link-block -->

        <style>
            #top-link-block.affix-top {
                position: absolute; /* allows it to "slide" up into view */
                bottom: -82px;
                left: 10px;
            }
            #top-link-block.affix {
                position: fixed; /* keeps it on the bottom once in view */
                bottom: 18px;
                left: 10px;
            }
        </style>

        <script>
            // Only enable if the document has a long scroll bar
            // Note the window height + offset
            if (($(window).height() + 100) < $(document).height()) {
                $('#top-link-block').removeClass('hidden').affix({
                    // how far to scroll down before link "slides" into view
                    offset: {top: 100}
                });
            }
        </script>
    </body>
</html>
