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
            <li><a href="/">HOME</a></li>
            <li><a href="/app/diseases">DISEASES</a></li>
            <li><a href="/app/symptoms">SYMPTOMS</a></li>
        </ul>
    </div>

    </header>

    <main>

        @yield('content')

    </main>

    <footer>

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

    </body>
</html>
