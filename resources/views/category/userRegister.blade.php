@extends('layouts.master')
@section('title','User Registration')

@section('css')
	<style type="text/css">
		#form{
    width: 30%;
    height: 50%;
    border: 2px solid green;
    margin: auto;
    padding: 20px;
    margin-top: 100px;
  }
  h1{
    text-align: center;

  }
  body{
    font-family: Georgia, serif;
  }	
	</style>
@endsection

@section('content')
    <div class="container">
      <div class="">

        {{-- @if (count($errors) > 0)
          @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
          @endforeach 
        @endif --}}

        <form id="form" class="form-horizantal" method="post" action="{{url('master')}}">
          {{ csrf_field() }}

          <div class="form-group">
            <h1>User Registration</h1>
            <label for="Username">Username</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" id="username" name="username" value="{{old('username')}}" placeholder="Enter your username">
          </div>

          <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <div class="form-group">
            <label for="passwordConfirm">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Password">
          </div>

          <button id="submit_btn"  type="submit" class="btn btn-primary">Register</button>

        </form>
      </div>

@endsection