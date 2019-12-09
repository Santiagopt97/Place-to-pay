@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Invoices</h1>
                </div>
            </div> 
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/home">Back</a>
                <a class="btn btn-outline-info" href="/invoice_reports/create">Create a new invoice</a>
            </div>
        </div>  
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach($invoiceReports as $invoiceReport)
                    <tr>
                        <td><a href="/invoice_reports/{{ $invoiceReport->id }}">{{ $invoiceReport->title }}</a></td>
                        <td>
                            <a class="btn btn-info btn-sm" href="/invoice_reports/{{ $invoiceReport->id }}/edit">Edit</a>
                            <a class="btn btn-danger btn-sm" href="/invoice_reports/{{ $invoiceReport->id }}/confirmDelete">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection