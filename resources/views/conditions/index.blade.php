@extends('layouts.app')
@section('content')

    <section id="conditions">

        @foreach($conditions as $condition)
            <div class="medium hover">
                <a href="/conditions/{{ $condition->id }}">
                    <div class="flex-center">
                        <h3>{{ title_case($condition->title) }}</h3>
                    </div>

                    <img class="img-fluid" src="{{ asset('storage/pages/placeholders/medium.png') }}"
                         alt="link to conditions page">
                </a>
            </div>
        @endforeach

    </section>
@endsection
