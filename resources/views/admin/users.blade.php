@extends('layouts.admin')

@section('content')
    <h4>Users List</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Date Added</th>
            <th scope="col">User Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            @if($user->user_role)
                <td>{{$user->user_role}}</td>
                @else
                <td>undefined</td>

                @endif
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
