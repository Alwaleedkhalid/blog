@extends('layouts.app')

    @section('content')
        <h1 class="">Forms - Proudect</h1>  
         <hr>

         {{-- ** this form for insert diffrent table from DB at index tamblete ** --}}
         
        {{-- at form elemnt .. if you need to make action should be use method = "post" 

         <form role="form" method="post" action="{{action('FormController@store')}}"> 
         {{-- /*this's function use it for security*/ --}}
            {{-- @csrf   
                <div class="form-group">
                  <label for="exampleInputEmail1">Frist Name</label>
                  <input name="fn" type="text" class="form-control " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input name="ln" type="text" class="form-control" required>
                </div>
                <div class="form-group"> --}}
                  {{-- <label for="exampleInputEmail1">product</label>
                  <input name="name" type="text" class="form-control " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">price </label>
                  <input name="price" type="text" class="form-control" required>
                </div> 
               <button href="/show" type="submit" class="btn btn-primary">Submit</button>
        </form>  --}}

      @if (count ($form) > 0)
       
        <div class="row page-item">
          <div class="col">
            <h4>Forms</h4>
              @foreach ($form as $forms)
            <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                {{-- <th scope="col">Created At</th>
                <th scope="col">Updated At</th> --}}
              </tr>
            </thead>
            <tbody>

              <tr>
                {{-- this's URI for show method (form/{form}) {id , name , etc..} --}}
                <th scope="row">{{$forms->id}}</th>
                <td>{{$forms->fn}}</td>
                <td>{{$forms->ln}}</td>
                {{-- <td>{{$forms->created_at}}</td>
                <td>{{$forms->updated_at}}</td> --}}
              </tr>

            </tbody>
          </table>
          @endforeach 
          {{$form->links()}}
            @else
                 <p> No Forms !</p>
         @endif
        </div>
        <div class="col">
          <h4>Proudcts</h4>
          @foreach ($product as $products)
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
                          <th scope="row">{{$products->id}}</th>
                          <td>{{$products->name}}</td>   
                          <td>{{$products->price}}</td>   
                      </tr>                                                                   
              </tbody>

           </table>
           @endforeach 
           {{$product->links()}} 
        </div>
        </div> 
        
        {{-- to more features about pagination ->     https://laravel.com/docs/5.8/pagination --}}
        {{$form->total()}}
        {{$form->firstItem()}}
        {{$form->perPage()}}	
        {{$form->total()}}
        {{$form->hasMorePages()}}		 
        
        {{-- <hr> 
        <h4> form table</h4>
        <h4> pp table</h4>
        @foreach ($product as $products)
        <p>
            {{$products}}
        @endforeach --}}
        @endsection




  