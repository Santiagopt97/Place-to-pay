@extends('layouts.app')
@section('title','Edit Clients')
@section('content')
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form action="/clients/{clients.update}" method = "post">
        @csrf
        <div class="form-group">
          <label for="firstname">First name:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "{{$clients->firstname}}">
        </div>
        <div class="form-group">
          <label for="lastname">Last name:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "{{$clients->lastname}}">
        </div>
        <div class="form-group">
          <label for="department">Department:</label>
          <input type="text" name = "department" id = "department" class="form-control" required value = "{{$clients->department}}">
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required value = "{{$clients->phone}}">
        </div>
        <input type="hidden" name="id" value = "{{$clients->id}}">
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection