@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">pesapal donate</div>

                    <div class="card-body">
                        <form method="POST" action="/store">
                            @csrf

                            <div class="row mb-3">
                                <label for="donors_name" class="col-md-4 col-form-label text-md-end">donors_name</label>

                                <div class="col-md-6">
                                    <input id="donors_name" type="text" class="form-control @error('donors_name') is-invalid @enderror" name="donors_name" value="{{ old('donors_name') }}" required autocomplete="donors_name" autofocus>

                                    @error('donors_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="donors_email" class="col-md-4 col-form-label text-md-end">donors_email</label>

                                <div class="col-md-6">
                                    <input id="donors_email" type="donors_email" class="form-control @error('donors_email') is-invalid @enderror"  name="donors_email" value="{{ old('donors_email') }}" required autocomplete="donors_email">

                                    @error('donors_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="amount" class="col-md-4 col-form-label text-md-end">amount to donate</label>

                                <div class="col-md-6">
                                    <input id="amount" type="amount" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount">

                                    @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="donation schedule" class="col-md-4 col-form-label text-md-end">period_of_payment</label>

                                <div class="col-md-6">

                                    <select class="form-control required" id="period_of-payment">
                                        <option id = "once" selected ="">once</option>
                                        <option id = "monthly" selected ="">monthly</option>
                                        <option id = "annually" selected ="">annually</option>
                                    </select>
                                    @error('period_of_payment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                               <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        send
                                    </button>
                                </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




