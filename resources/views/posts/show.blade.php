@extends('layouts.app')
@section('content')
    <main class="container-fluid">
        <section>
            <div class="row justify-content-center" style="padding-top: 4rem">
                <div class="col-7 card mb-3">
                    <img class="card-img-top" src="/storage/{{$post->image}}"
                         style="max-height: 400px; width: 100%" alt="Card image cap">
                    <div class="card-body">
                        <div class="label">News<span> / </span> <span
                                    class="text-muted"> {{$post->created_at->toFormattedDateString()}}</span></div>
                        <h1 class="card-title"><b>{{$post->title}}</b></h1>
                        <p class="card-text">{!! $post->body !!}</p>
                        <p class="card-text">
                            <small class="text-muted">Posted {{$post->created_at->diffForHumans()}}</small>
                        </p>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection