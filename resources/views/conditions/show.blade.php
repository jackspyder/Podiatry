@extends('layouts.app')

@section('content')
    <section>
        <div class="container">

            {{--{!! $condition->body !!}--}}

            <img src="/storage/{{$condition->image}}" style="width: 100%">
            <div class="col-8 offset-2">
                <h2 class="section-heading text-center">{{ $condition->title }}</h2>

                {!! $condition->body !!}
            </div>

        </div>
    </section>
@endsection

