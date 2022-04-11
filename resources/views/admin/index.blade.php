@extends('layouts.admin')

@section('content')
    <h4>Donations List</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Amount Donated</th>
            <th scope="col">Status</th>
            <th scope="col">Donor Email</th>
            <th scope="col">Donor Phone Number</th>
            <th scope="col">Donor Donation Schedule</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($donations as $donation)
        <tr>
            <th scope="row">{{$donation->id}}</th>
            <td>{{$donation->donors_name}}</td>
            <td>{{$donation->amount}}</td>
            <td>{{$donation->status}}</td>
            <td>{{$donation->donors_email}}</td>
            <td>{{$donation->donor_phone_number}}</td>
             <td>{{$donation->period_of_payment}}</td>
            <td>{{$donation->created_at->diffForHumans()}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
