<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','blog')}}</title>
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
    </body>
</html>
