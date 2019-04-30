@extends('layouts.app')

    @section('content')
        
    <h1>form number : {{$form->id}}</h1>  
    <hr>

      <table class="table table-bordered">
          <thead>
              <tr>
                <th scope="col">Frist Name</th>
                <th scope="col">Last Name</th>
            
              </tr>
            </thead>
                
            <tbody>
                    <tr>
                        <td class="table-success">{{$form->fn}}</td>   
                        <td class="table-danger">{{$form->ln}}</td>  
                    </tr>                                                                   
            </tbody>
       </table>
    
        {{-- @for ($i = 0; $i < $form ; $i++)
         <form role="show" method="get" action="{{action('FormController@index')}}">     
            
         @for ($i = 0; $i < $form; $i++) 
         <table class="table table-bordered table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
            </tr>
          </thead>
          <tbody>
             <tr>
              <th scope="row"><a href="/form/create/{{$form->fn}}">{{$form->id}}</a></th>   
             </tr>
          </tbody>
         </table> 
         @endfor --}}
   
    <div class="row">

      <div class="col-9">
      <a href="/form/create" class="btn btn-secondary btn-lg float-left">Add New form</a>
      &nbsp;
      <a href="/form/{{$form->id}}/edit" class="btn btn-warning btn-lg float-center">Edit</a>
      &nbsp;
      <a href="/" name="" class="btn btn-light btn-lg float-right">Home</a> 
      </div>

      <div class="col-3">
      <form action="{{action('FormController@destroy', $form->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button href="form" class="btn btn-danger btn-lg float-right" type="submit">Delete</button>
      </form>
      </div>
    </div>
    @endsection

