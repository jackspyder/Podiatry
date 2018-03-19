@extends('layouts.app')

@section('content')
    <main class="container">
        <section>
            <div class="row justify-content-center" style="padding-top: 4rem">
                <div class="col-12 card mb-3">
                    <img class="card-img-top" src="/storage/{{$condition->image}}" alt="Card image cap">
                    <div class="col-lg-10">
                        <div class="card-body">
                            <h1 class="card-title heading"><b>{{$condition->title}}</b> {{$condition->description}}</h1>

                            <p class="card-text text-muted">{!! $condition->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection

