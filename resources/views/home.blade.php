@extends('layouts.app')

@section('content')
<div class="container">
 
    <div class="row justify-content">
        <div class="card text">
            <div class="card border-light mb-3" style="width: 65rem;">
                <div class="card-header">
                    <h3>Welcome</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Invoices</strong></h5>
                    <p class="card-text">                
                        <h6><a href="/invoice_reports">Click here to see your invoices</a></h6>
                    <h5 class="card-title"><strong>Clients</strong></h5>
                    <p class="card-text">                
                        <h6><a href="/clients">The clients are here</a></h6>

                        
                    You are logged in!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
