@extends('layouts.app')
@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="heading">Contact & Referral</h2>
                    <p class="text-muted">Please click on the left-hand option if you are a healthcare professional
                        wishing to make a referral. For all other enquiries, please use the form to the right.</p>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h4 class="card-title heading">Professional Referral Form</h4>
                            <p class="card-text">Referral form for professional use only.</p>
                            <a href="/contact/referral" class="btn btn-primary">View Form</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h4 class="card-title heading">Public Contact Form</h4>
                            <p class="card-text">Contact form for all enquiries.</p>
                            <a href="/contact/public" class="btn btn-primary">View Form</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
