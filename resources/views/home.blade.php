
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card ">
                    <div class="">
                        <img src="{{asset('/images/donors.png')}}" class="card-img-top"   alt="..." >
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Welcome to donors huddle</h4>
                        <p class="card-text">We receive donations from our esteemed members of our Donations Club. We provide a flexible donation schedule backed by a wide range of payment methods such as
                            <b> M-PESA, Electronic Cards, EquitelMoney, Bank Transfer and others.  To Donate, please fill in your details to proceed to the donations payment page.</b>
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <br>
                <h3>Please fill your in details here</h3>
                <form method="post" action="{{ route('new_donation') }}">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" required aria-describedby="emailHelp" placeholder="Enter your name">
                        <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" required class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" required class="form-control" name="phone"  aria-describedby="emailHelp" placeholder="Enter phone number">
                        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Amount</label>
                        <input type="number" required class="form-control" name="amount"  aria-describedby="emailHelp" placeholder="Enter amount to donate">
                    </div>

                    <div class="form-group">
                        <label for="phone">Donation Schedule</label>
                        <select class="form-select" name="schedule" id="">
                            <option value="once">One Time</option>
                            <option value="monthly">Monthly</option>
                            <option value="annually">annually</option>
                        </select>
                    </div>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-primary form-control" style="background-color: #1c96e0; border-color: #1c96e0">Proceed to the payments page</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection