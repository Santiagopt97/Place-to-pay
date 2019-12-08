@extends('layouts.app')
@section('title','Clients Index')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
      <div class="col">
                <a class="btn btn-secondary" href="/home">Back</a>
                <a class="btn btn-outline-info" href="/clients/create">Create a new client</a>
      </div>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Department</th>
          <th>Phone No.</th>
        </tr>
        @foreach($clients as $client)
          <tr class = "text-center">
            <td>{{ $clients->id }}</td>
            <td>{{ $clients->firstname }}</td>
            <td>{{ $clients->lastname }}</td>
            <td>{{ $clients->department }}</td>
            <td>{{ $clients->phone }}</td>
            <a class="btn btn-info btn-sm" href="/clients/{{ $clients->id }}/edit">Edit</a>
            <a class="btn btn-danger btn-sm" href="/clients/{{ $clients->id }}/confirmDelete">Delete</a>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection