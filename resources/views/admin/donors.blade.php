@extends('layouts.admin')

@section('content')
    <h4>Donors List</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Donation Schedule</th>
            <th scope="col">Date Joined</th>
        </tr>
        </thead>
        <tbody>
        @foreach($donors as $donor)
        <tr>
            <th scope="row">{{$donor->id}}</th>
            <td>{{$donor->name}}</td>
            <td>{{$donor->email}}</td>
            <td>{{$donor->phone_number}}</td>
             <td>{{$donor->payment_interval}}</td>
            <td>{{$donor->created_at->diffForHumans()}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
