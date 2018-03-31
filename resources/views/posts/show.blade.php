@extends('layouts.app')
@section('content')
    <main class="container">
        <section>
            <div class="row justify-content-center" style="padding-top: 4rem">
                <div class="col-12 card mb-3">
                    <img class="card-img-top" src="{{Voyager::image($post->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <div class="col-lg-10">
                            <div class="label heading"><b>News</b><span> / </span> <span
                                        class="text-muted"> {{$post->created_at->toFormattedDateString()}}</span></div>
                            <h1 class="card-title heading"><b>{{$post->title}}</b></h1>
                            <p class="card-text text-muted">{!! $post->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection