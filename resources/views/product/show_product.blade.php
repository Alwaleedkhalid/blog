@extends('layouts.app')

    @section('content')

        <h1>Insert</h1>
        <hr>
        <p style="text-align:left">Add your products with prices : </p> 
        {{-- @if(count($products & $praices > 0))
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">PRODUCTS</th>
                    <th scope="col">PRICES</th>
                  </tr>
                </thead>
                    @for ($i = 1; $i < 4; $i++)
                        @foreach ($products as $product)
                            @foreach ($praices as $praice)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$product}}</td>                                
                                    <td>{{$praice}}</td>                            
                                </tr>                                                                   
                            </tbody>
                            @endforeach
                        @endforeach 
                    @endfor
            </table>
        @endif --}}

            {{-- <form role="form" method="post" action="{{action('PageContoller@store')}}">
                {{-- /*this's function use it for security*/ --}}
                    {{-- @csrf   
                       <div class="form-group">
                         <label for="exampleInputEmail1">PRODUCT</label>
                         <input name="name" type="text" class="form-control" required>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputPassword1">PRICES</label>
                         <input name="price" type="number" class="form-control" required>
                       </div>
                       <button href="/show" type="submit" class="btn btn-primary">Submit</button>
             </form>     --}}

            <hr> 
        {{-- 
        @if (count($products) > 0)
            @foreach ($products as $product)
                <table class="table table-bordered">
                    
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">PRODUCTS</th>
                        <th scope="col">PRICES</th>
                      </tr>
                    </thead>
                        
                    <tbody>
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>   
                                <td>{{$product->price}}</td>   
                            </tr>                                                                   
                    </tbody>

                 </table>
            @endforeach
            {{$products->links()}}
            <a href="/insert_product" class="btn btn-secondary">Add New Proudct</a>
            <a href="/" class="btn btn-light">Go Back</a>
        @else
            <p>no product !</p>
        @endif --}}
        
    @endsection
        
