@extends('layouts.app')
@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="section-heading">Services</h2>
                    <p class="text-muted">Take a look through the services we have on offer and visit our booking page
                        to
                        book an appointment or if you're unsure, use our contact form to arrange contact with a
                        professional.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="row justify-content-around">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-3 ">
                            <div class="card-body">
                                <h4 class="card-title">{{ title_case($service->title) }}</h4>
                                <p class="card-text">{{ title_case($service->summary) }}</p>
                                <a href="/services/{{ $service->id }}" class="btn btn-primary">Read More!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection
