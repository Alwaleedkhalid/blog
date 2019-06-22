@extends('layouts.app')

    @section('content')

    <h1>Edit Form No. {{$form->id}}</h1>
    <hr>
    {{-- at form elemnt .. if you need to Edit  should be use method = "update"   name="csrf-token" content="{{ csrf_token() }}"--}}
        <form role="form" method="post" action="{{action('FormController@update', $id)}}">  
            @method('PUT')
            @csrf
            <div>
                {{-- /*this's function use it for security*/ --}}
                {{-- @if ()   --}}
                  <label for="exampleInputEmail1">Update Frist Name</label>
                  <input name="fn" type="text" placeholder="change it ( {{$form->fn}} ) to "  class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"> Update Last Name</label>
                  <input name="ln" type="text" placeholder="change it ( {{$form->ln}} ) to" class="form-control" required>
                </div>
            </div>
                {{-- @endif --}}
                {{-- <div class="form-group">  --}}
                  {{-- <label for="exampleInputEmail1">product</label>
                  <input name="name" type="text" class="form-control " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">price </label>
                  <input name="price" type="text" class="form-control" required>
                </div> --}}
            <button href="/form" type="submit" class="btn btn-primary">Submit</button>
         </form>  
         <div class="container">  
         <hr>
         </div>
            <div class="row"> 
            <div class="col-6">
              <a href="/form/create" class="btn btn-secondary">Add New Form</a>
            </div>
            <div class="col-6">
            <a href="/" class="btn btn-light">Home</a> 
            </div>
          </div>
    @endsection