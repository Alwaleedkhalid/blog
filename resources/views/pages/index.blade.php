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
        
    @endsection
