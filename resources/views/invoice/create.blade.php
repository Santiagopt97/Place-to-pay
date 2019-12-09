@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>New Description</h1>
            </div>
        </div> 
        <div class="row">
            <div class="col">
            <a class="btn btn-secondary btn-sm" href="/invoice_reports/{{ $report->id }}">Back</a>
            </div>
        </div>  
        <div class="row">
            <div class="col">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif 
                <form action="/invoice_reports/{{ $report->id }}/invoices" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Type an amount" value="{{ old('title') }}">
                    </div>

                    <button class="btn btn-info" type="submit">Submit</button>
                </form>
            </div>
        </div> 
    </div>
@endsection