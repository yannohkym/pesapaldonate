@extends('layouts.admin')

@section('content')
  <div class="container">
      <div class="row">
          <form method="post" action="{{ route('configuration') }}">
              <div class="form-group">
                  <label for="name">Consumer Key</label>
                  <input type="text" name="consumer_key" class="form-control" @if($config)value="{{$config->consumer_key}}" @endif required aria-describedby="" placeholder="Enter the key">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Consumer Secret</label>
                  <input type="text" required class="form-control" name="consumer_secret" @if($config) value="{{$config->consumer_secret}}" @endif id="" aria-describedby="" placeholder="Enter secret">

              </div>




              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="form-group">
                  <br>
                  <button type="submit" class="btn btn-primary form-control" style="background-color: #1c96e0; border-color: #1c96e0">save</button>
              </div>
      </div>
      </div>
@endsection
