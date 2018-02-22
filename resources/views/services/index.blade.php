@extends('layouts.app')
@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="heading">Services</h2>
                    <p class="text-muted">We take pride in offering a comprehensive and extremely high-quality range of
                        treatments for all manner of foot, ankle and lower limb conditions regardless of your age,
                        activity levels or additional health problems. We are also registered with most major private
                        health insurance organisations including Bupa.</p>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="row justify-content-around">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h4 class="card-title heading">{{ title_case($service->title) }}</h4>
                                <p class="card-text">{{ $service->summary }}</p>
                                <a class="btn btn-primary" href="/services/{{ $service->id }}">Read
                                    More!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection
