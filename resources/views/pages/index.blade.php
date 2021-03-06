@extends('layouts.app')
    @section('content')

<div class="">
   <h1><span class="border card-header">{{$title}}</span></h1>
   <br>
    <div class="card-body">
    <p><span class="border-info border-bottom">first Project .... !</span></p>
    </div>
</div>
    <hr>
    <div class="row container">


        <div class="col-6">
            <a href="/login" class="active btn btn-success btn-lg" id="login-form-link">Login</a>
        </div>

        <div class="col-6">
            <a href="/register" class="active btn btn-secondary btn-lg" id="register-form-link">Register</a>
        </div>
        
        
                        {{-- @foreach ($get_products_from_db as $products)
                        <br>
                        {{$products->name}}
                        <hr>
                        @endforeach
                        --}}

    </div>
        {{-- <br>
    <div class="card text-white bg-danger mb-3 container-fluid" style="max-width: 18rem;">
    <div class="card-header">أهلا و سهلا</div>
    <div class="card-body">
        <h5 class="card-title">Secondary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div> --}}

    <hr>

    <canvas id="myChart" width="400" height="400">    </canvas>

        
    </div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['{{$title}}', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'of Votes',
                    data: [12, 21, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
        
        
    <script>
        function myInitializeAPI() {
        var mapDiv = 'map'; //id of the div where the map should appear
        var mapType = '21'; //default or 10=SPMaps; 21=Google; 31=Bing; 12=Traffic
        var mapLanguage = 'A';
        var proxyUrl = '';
        var apiClientKey = '';
        SANGC_LoadMapViewer(mapDiv, mapType, mapLanguage, proxyUrl, apiClientKey);
        };
    </script>

    @endsection


    