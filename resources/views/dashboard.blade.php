@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/insert_product" class="btn btn-outline-dark btn-lg">New Proudct</a>
                    &nbsp;
                    <a href="/form/create" class="btn btn-outline-dark btn-lg">New Form</a>
                    &nbsp;
                    <a href="/insert_product" class="btn btn-outline-dark btn-lg">Your Products </a>

                </div>
                <br>
                <h3>Forms and Proudcts</h3> 
                
                {{-- @if(count($products) > 0)

                @foreach ($products as $Proudct)
                    <a href="/insert_product" class="btn btn-outline-dark btn-lg"> Your Products </a>
                @endforeach
                    
                @else
                    <h2>No Products</h2>
                @endif --}}
            </div>
        </div>
    </div>
</div>
</div>
@endsection
