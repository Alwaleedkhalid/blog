@extends('layouts.app')

    @section('content')

    <h1>Create Form '</h1>
    {{-- at form elemnt .. if you need to make action should be use method = "post" --}}
        <form role="form" method="post" action="{{action('FormController@store')}}">
         {{-- /*this's function use it for security*/ --}}
            @csrf   
                <div class="form-group">
                  <label for="exampleInputEmail1">Frist Name</label>
                  <input name="fn" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input name="ln" type="text" class="form-control" required>
                </div>

                {{-- <div class="form-group"> 
                  <label for="exampleInputEmail1">product</label>
                  <input name="name" type="text" class="form-control " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">price </label>
                  <input name="price" type="text" class="form-control" required>
                </div> --}}
              <button href="form" type="submit" class="btn btn-primary">Submit</button>
         </form>   

            <hr>

          <div class="row"> 
            <div class="col-6">
              <a href="/form" class="btn btn-secondary">FORMS</a>
            </div>
            <div class="col-6">
            <a href="/" class="btn btn-light">Home</a> 
            </div>
          </div>

    @endsection