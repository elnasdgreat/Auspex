<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>

        <link
            type="text/css"
            rel="stylesheet"
            href="{{ base_url( 'vendor/materialize/css/materialize.min.css' ) }}"
            media="screen,projection"/>
        {{-- <link type="text/css" rel="stylesheet" href="{{ base_url( 'css/animate.min.css' ) }}"> --}}
        <link
            type="text/css"
            rel="stylesheet"
            href="{{ base_url( 'vendor/font-awesome/css/font-awesome.min.css' ) }}"/>
        <link
            type="text/css"
            rel="stylesheet"
            href="{{ base_url( 'assets/css/style.css' ) }}"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <header>
    <div class="center-align my-nav">
        <ul>
            <li><a href="{{ base_url('/') }}">HOME</a></li>
            <li><a href="{{ base_url('/app/diseases') }}">DISEASES</a></li>
            <li><a href="{{ base_url('/app/symptoms') }}">SYMPTOMS</a></li>
        </ul>
    </div>

    </header>

    <main>

        @yield('content')

    </main>

    <footer>
        <div class="container center-align white-text">
            <p>
                Copyright 2017 - Auspex
                <a class="right white-text" href="{{ base_url('/app/login') }}">Login</a>
            </p>
        </div>
    </footer>


    <script
        type="text/javascript"
        src="{{ base_url( 'vendor/jquery/jquery-3.1.1.min.js' ) }}">
    </script>
    <script
        type="text/javascript"
        src="{{ base_url( 'vendor/materialize/js/materialize.min.js' ) }}">
    </script>
    <script
        type="text/javascript"
        src="{{ base_url( 'assets/js/app.js' ) }}">
    </script>
    <script
        type="text/javascript"
        src="{{ base_url( 'assets/js/login.js' ) }}">
    </script>

    </body>
</html>
