@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2 class="section-heading text-center">Where are we?</h2>
                <p class="text-muted">if you're unsure about what type of appointment you require, take a look at our
                    services section or use the contact page to whatever</p>
            </div>

        </div>
        <hr>
        <div class="row">
            <iframe src='https://tweed-podiatry.cliniko.com/bookings?embedded=true' frameborder='0' scrolling="auto"
                    width='100%' height='1000'></iframe>
        </div>

    </div>

@endsection
