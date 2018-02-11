@extends('layouts.app')

@section('content')
    <main class="container-fluid">
        <section>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="heading text-center">{{ $service->title }}</h2>
                    {{--<img src="/storage/{{$service->image}}" style="width: 100%">--}}
                    {!! $service->body !!}

                    <p>To book an appointment with us, please visit our booking page.</p>
                </div>
            </div>
        </section>
    </main>
@endsection