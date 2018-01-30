@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h4>{{ $service-> title }} at id: {{ $service->id }}</h4>
            {!! $service->body !!}
        </div>
    </section>
@endsection