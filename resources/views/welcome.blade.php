@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Coming Soon
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>

    <section id="options" class="bg-light">
        <div class="large hover">
            <a href="{{url('/conditions')}}">
                <img class="img-fluid" src="http://placehold.it/640x600" title="CONDITON">
            </a>
        </div>

        <div class="medium hover">
            <a href="{{url('/services')}}">
                <img class="img-fluid" src="http://placehold.it/640x300" title="SERVICE">
            </a>
        </div>

        <div class="large hover">
            <a href="{{url('/book')}}">
                <img class="img-fluid" src="http://placehold.it/640x600" title="BOOK">
            </a>
        </div>

        <div class="small hover">
            <a href="{{url('/blog')}}">
                <img class="img-fluid" src="http://placehold.it/320x300" title="Blog">
            </a>
        </div>

        <div class="small hover">
            <a href="{{url('/contact')}}">
                <img class="img-fluid" src="http://placehold.it/320x300" title="Contact">
            </a>
        </div>
    </section>

    <section id="about">
        <h1>About section</h1>
    </section>

    <section id="timeline" class="bg-light">
        <h1>Timeline Section</h1>
    </section>
@endsection