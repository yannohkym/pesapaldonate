@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <br>
            <br>
            <h1>Welcome to the Doners Huddle</h1>
            <h3>We receive donations from our esteemed club members to cater for the various causes.</h3>
            <h5>We provide a flexible donation schedule backed by a wide range of payment methods such as M-PESA, Electronic Cards, EquitelMoney, Bank Transfer and others. </h5>

            <h5> Please fill in your details to proceed to the donation Payment page</h5>

        </div>
      <div class="col-md-6">
          <br>
          <br>
          <form method="POST" action="{{}}">
              <div class="form-group">
                  <label for="name">Your Name</label>
                  <input type="text" class="form-control" required aria-describedby="emailHelp" placeholder="Enter your name">
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
                      <option value="yearly">Yearly</option>
                  </select>
              </div>
              <div class="form-group">
                  <br>
                  <button type="submit" class="btn btn-primary form-control">Proceed to the payments page</button>
              </div>

          </form>
      </div>
    </div>
</div>
@endsection
