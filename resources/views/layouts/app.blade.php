<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'blog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            section{
                text-align: center;
             }
             footer{
                text-align: center;
             }
        </style>
</head>
    <body>
    {{-- <div id="app"> --}}
        {{-- <main class=""> --}}
        <nav>
                @include('inc.navbar')
        </nav>
            <section>
                <div class="container">
                    @yield('content')
                </div>
            </section>
        <footer class="container">
            <hr>
            @include('inc.footer')
        </footer>
        {{-- </main> --}}
    {{-- </div> --}}
    </body>
</html>
