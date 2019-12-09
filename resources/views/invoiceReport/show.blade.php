@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Invoice: {{$report->title }}</h1>
            </div>
        </div> 
        <div class="row">
            <div class="col">
            <a class="btn btn-secondary" href="/invoice_reports">Back</a>
            <a class="btn btn-primary" href="/invoice_reports/{{ $report->id }}/invoices/create">New Description</a>
            </div>
        </div>  
        <div class="row">
            <div class="col">
                <h3>Details</h3>
                <table class="table">
                    @foreach($report->invoices as $invoice)
                    <tr>
                        <tr>
                        <th scope="col">Id Product</th>
                        <th scope="col">Date</th>
                        <th scope="col">Amount</th>
                        </tr>
                        <td>{{ $invoice->description }}</td>
                        <td>{{ $invoice->created_at }}</td>
                        <td>{{ $invoice->amount }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div> 
    </div>
@endsection