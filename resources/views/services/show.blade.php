@extends('layouts.app')

@section('content')
    <main class="container">
        <section>
            <div class="row justify-content-center" style="padding-top: 4rem">
                <div class="col-10 card mb-3">
                    <div class="card-body">
                        <h1 class="card-title heading"><b>{{$service->title}}</b></h1>
                        <p class="card-text">{!! $service->body !!}</p>
                        <p class="card-text">
                            <small class="text-muted">Posted {{$service->created_at->diffForHumans()}}</small>
                        </p>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection