@extends('layouts.app')
@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="heading">Blog</h2>
                    <p class="text-muted">Check out our growing archive of blog articles on all things lower limb!
                        Produced by myself and occasional guests writers. If you find something you enjoy reading,
                        please share it on social media with your friends. If you don't like it, share it with your
                        enemies.</p>
                </div>
            </div>
        </section>

        <section id="blog">
            <div class="row justify-content-around">
                @foreach($posts as $post)
                    <div class="col-7 card mb-3">
                        <a href="/blog/{{$post->id}}"><img class="card-img-top" src="/storage/{{$post->image}}"
                                                           style="max-height: 400px" alt="Card image cap"></a>
                        <div class="card-body">
                            <div class="label">News<span> / </span> <span
                                        class="text-muted"> {{$post->created_at->toFormattedDateString()}}</span></div>
                            <h4><a href="/blog/{{$post->id}}" class="card-title"><b>{{$post->title}}</b></a></h4>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <p class="card-text">
                                <small class="text-muted">Posted {{$post->created_at->diffForHumans()}}</small>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection