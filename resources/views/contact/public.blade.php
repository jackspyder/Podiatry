@extends('layouts.app')

@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="heading">Contact Form</h2>
                    <p class="text-muted">If you are unsure about what type of appointment you require, please take a
                        look at our services section for more information, get in touch by phone, email or via our
                        online contact form and we will be happy to assist you.</p>
                </div>
            </div>
        </section>

        <section>
            @if(session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <form class="form-horizontal" method="POST" action="/contact/public">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Name">Name: </label>
                            <input type="text" class="form-control" id="name" placeholder="Your name" name="name"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="number">Contact Number: </label>
                            <input type="number" class="form-control" id="number" placeholder="01573 123 456"
                                   name="number" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="text" class="form-control" id="email" placeholder="john@example.com"
                                   name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="message">message: </label>
                            <textarea type="text" class="form-control luna-message" id="message"
                                      placeholder="Type your messages here" name="message" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" value="Send">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection