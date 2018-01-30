@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h4>{{ $condition-> title }} at id: {{ $condition->id }}</h4>
            {!! $condition->body !!}
        </div>
    </section>
@endsection