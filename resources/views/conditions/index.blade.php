@extends('layouts.app')
@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="section-heading">Conditions</h2>
                    <p class="text-muted">Browse through our list of common pediatric conditions that may arise.
                        <br>
                        Please note, this list is not exhaustive.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="row justify-content-around">
                @foreach($conditions as $condition)
                    <div class="col-lg-4 col-md-6 text-center hover">
                        <a class="dim" href="/conditions/{{ $condition->id }}">
                            <div class="card mb-3 text-white">
                                <div class="dim">
                                    <img class="card-img" src="/storage/{{$condition->image}}"
                                         alt="Card image">
                                </div>
                                <div class="card-img-overlay">
                                    <h4 class="card-title">{{ title_case($condition->title) }}</h4>
                                    <h5 class="card-subtitle">{{ title_case($condition->description) }}</h5>
                                    {{--<p class="card-text">                                    --}}
                                    {{--This is a wider card with supporting text below as a natural--}}
                                    {{--lead-in to--}}
                                    {{--additional content. This content is a little bit longer.</p>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection
