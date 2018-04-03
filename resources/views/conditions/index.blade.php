@extends('layouts.app')
@section('content')
    <main class="container">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="heading">Conditions</h2>
                    <p class="text-muted">Browse through our list of common foot, ankle and lower limb conditions that
                        may arise.
                        <br>
                        Please note, this list is not exhaustive and should not be used to self-diagnose.</p>
                </div>
            </div>
        </section>

        <section id="conditions">
            <div class="row justify-content-around">
                @foreach($conditions as $condition)
                    <div class="col-lg-4 col-md-6 text-center hover">
                        <a class="dim" href="/conditions/{{ $condition->slug }}">
                            <div class="card mb-3 text-white">
                                <div class="dim">
                                    <img class="card-img" src="{{Voyager::image($condition->thumbnail('medium'))}}"
                                         alt="Card image">
                                </div>
                                <div class="card-img-overlay">
                                    <h4 class="card-title">{{ title_case($condition->title) }}</h4>
                                    <h5 class="card-subtitle">{{ title_case($condition->description) }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection
