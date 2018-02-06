@extends('layouts.app')

@section('content')
    <section>
        <div class="container">

            <div class="col-8 offset-2">
                <h2 class="section-heading text-center">{{ $condition->title }}</h2>

                <img src="/storage/{{$condition->image}}" style="width: 100%">

                {!! $condition->body !!}
            </div>

        </div>
    </section>
@endsection

