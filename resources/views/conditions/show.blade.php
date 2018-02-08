@extends('layouts.app')

@section('content')
    <main class="container-fluid">
    <section>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="heading text-center">{{ $condition->title }}</h2>
                <img src="/storage/{{$condition->image}}" style="width: 100%">
                {!! $condition->body !!}
            </div>
        </div>

    </section>
    </main>
@endsection

