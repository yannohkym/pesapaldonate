@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">pesapal donate</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-condensed">
                                <thead>

                                <tr>
                                    <th>donors_name</th>
                                    <th>donors_email</th>
                                    <th>amount</th>
                                    <th>period_of_payment</th>
                                    <th>donor_phone_number</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donation as $donn)
                                    <tr>
                                        <td>{{$donn->donors_name}}</td>
                                        <td>{{$donn->donors_email}}</td>
                                        <td>{{$donn->amount}}</td>
                                        <td>{{$donn->period_of_payment}}</td>
                                        <td>{{$donn->donor_phone_number}}</td>
                                        <td>

                                            <a href="" class="btn btn-primary btn-sm">edit</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-danger btn-sm">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





