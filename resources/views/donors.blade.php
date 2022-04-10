@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My donors</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-condensed">
                                <thead>

                                <tr>
                                    <th>Donors_name</th>
                                    <th>Donors_email</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donor as $donn)
                                    <tr>
                                        <td>{{$donn->name}}</td>
                                        <td>{{$donn->email}}</td>



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





