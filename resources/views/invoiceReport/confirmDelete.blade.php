@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Delete Report {{$report->id }}</h1>
            </div>
        </div> 
        <div class="row">
            <div class="col">
                <form action="/invoice_reports/{{ $report->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-secondary" href="/invoice_reports">Back</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>  
    </div>
@endsection