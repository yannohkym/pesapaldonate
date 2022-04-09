@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <iframe src="{{ $iframe }}" width="100%" height="700px"  scrolling="no" frameBorder="0">
                    <p>Browser unable to load iFrame</p>
                </iframe>
            </div>
        </div>
    </div>
@endsection
