@extends('layouts.app')
@section('title','Create Clients')
@section('content')
<div class="container">
  <div class="col">
    <a class="btn btn-secondary" href="/home">Back</a>
  </div>
  <div class="row mt-5">
    <div class="col-sm-10 offset-sm-1">
      <form action="/clients/{clients.store}" method = "POST">
        @csrf
        <div class="form-group">
          <label for="firstname">Firstname:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="lastname">Lastname:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="department">Department:</label>
          <input type="text" name = "department" id = "department" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-secondary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
