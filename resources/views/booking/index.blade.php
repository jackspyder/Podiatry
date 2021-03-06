@extends('layouts.app')
@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="heading">Booking</h2>
                    <p class="text-muted">If you are unsure about what type of appointment you require, please take a
                        look at our services section for more information, get in touch by phone, email or via our
                        online contact form and we will be happy to assist you.</p>
                </div>
            </div>
        </section>

        <hr>

        <section>
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <iframe src='https://tweed-podiatry.cliniko.com/bookings?embedded=true' frameborder='0'
                            scrolling="auto"
                            width='100%' height='1000'></iframe>
                </div>
            </div>
        </section>

    </main>
@endsection
