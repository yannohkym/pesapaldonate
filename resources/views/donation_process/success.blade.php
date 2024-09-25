@extends('layouts.app')


@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center shadow" style="background-color: #e0f7fa;">
                    <div class="card-body">
                        <h4 class="card-title">Donation Payment Successful!</h4>
                        <p class="card-text">Thank you for your generous contribution.</p>
                        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
