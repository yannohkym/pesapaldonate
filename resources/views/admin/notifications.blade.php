@extends('layouts.admin')

@section('content')
    <h4>Notifications List</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Sent_to</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>

        </tr>
        </thead>
        <tbody>
        @foreach($notifications as $emailnotification)
            <tr>

                <td>{{$emailnotification->sent_to}}</td>
                <td>{{$emailnotification->message}}</td>
                <td>{{$emailnotification->created_at->diffForHumans()}}</td>




    @endforeach

@endsection
