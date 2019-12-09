@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Clients: {{$report->title }}</h1>
            </div>
        </div> 
        <div class="row">
            <div class="col">
            <a class="btn btn-secondary" href="/clients">Back</a>
            <a class="btn btn-primary" href="/clients/{{ $report->id }}/clients/create">New Description</a>
            </div>
        </div>  
        <div class="row">
            <div class="col">
                <h3>Details</h3>
                <table class="table">
                    @foreach($report->clients as $client)
                    <tr>
                        <tr>
                        <th scope="col">FistName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Department</th>
                        <th scope="col">PhoneNumber</th>
                        </tr>
                        <td>{{ $client->description }}</td>
                        <td>{{ $client->created_at }}</td>
                        <td>{{ $client->amount }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div> 
    </div>
@endsection