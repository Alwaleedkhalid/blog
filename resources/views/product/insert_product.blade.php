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
            <form role="form" method="post" action="{{action('PageContoller@store' ,['user_id' => Auth::user()->id])}}">
                    {{-- /*this's function use it for security*/ --}}
                    @csrf   

                       <div class="form-group">
                         <label for="exampleInputEmail1">PRODUCT</label>
                         <input name="name" type="text" class="form-control" required>
                       </div>

                       <div class="form-group">
                         <label for="exampleInputPassword1">PRICES</label>
                         <input name="price" type="number" class="form-control" required>
                       </div>

                       <div class="form-group">
                         <label for="exampleInputPassword1">detial</label>
                         <input name="detial" type="text" class="form-control" required>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputPassword1">stock</label>
                         <input name="stock" type="number" class="form-control" required>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputPassword1">discount</label>
                         <input name="discount" type="number" class="form-control" required>
                       </div>
    
                       <button href="" type="submit" class="btn btn-primary">Submit</button>
             </form>    

            <hr>

        @if (count($products) > 0)
            @foreach ($products as $product)
                <table class="table table-bordered">
                    
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">PRODUCTS</th>
                        <th scope="col">PRICES</th>
                        <th scope="col">detial</th>
                        <th scope="col">stock</th>
                        <th scope="col">discount</th>
                      </tr>
                    </thead>
                       
                    <tbody>
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>   
                                <td>{{$product->price}}</td>   
                                <td>{{$product->detial}}</td>   
                                <td>{{$product->stock}}</td>   
                                <td>{{$product->discount}}</td>   
                            </tr>                                                                   
                    </tbody>

                 </table>
            @endforeach
            {{-- this is for pagenate --}}
            {{$products->links()}}
            <a href="/insert_product" class="btn btn-secondary">Add New Proudct</a>
            <a href="/" class="btn btn-light">Go Back</a>
        @else
            <h1>no product !</h1>
        @endif
        
        {{-- <form action="{{action('PageContoller@search')}}">
            

        </form> --}}
    @endsection
        
