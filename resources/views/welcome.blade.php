@extends('layouts.app')
@section('content')
    <main>
        <section id="options" class="bg-light">
            <div class="medium hover">
                <a class="dim" href="{{url('/services')}}">
                    <div class="flex-center"><h3>Services</h3></div>
                    <img class="img-fluid" src="{{ asset('/storage/pages/home/ServicesTwo.jpeg') }}" title="SERVICE">
                </a>
            </div>
            <div class="large hover">
                <a class="dim" href="{{url('/conditions')}}">
                    <div class="flex-center"><h3>Conditions</h3></div>
                    <img class="img-fluid" src="{{ asset('/storage/pages/home/Conditions.jpeg') }}"
                         alt="link to conditions page">
                </a>
            </div>
            <div class="medium hover">
                <a class="dim" href="{{url('/about')}}">
                    <div class="flex-center"><h3>About Us</h3></div>
                    <img class="img-fluid" src="http://placehold.it/400x180/0F5759/FFFFFF" title="About">
                </a>
            </div>
            <div class="small hover">
                <a class="dim" href="{{url('/blog')}}">
                    <div class="flex-center"><h3>Blog</h3></div>
                    <img class="img-fluid" src="{{ asset('storage/pages/home/Blog.jpeg') }}" title="Blog">
                </a>
            </div>
            <div class="small hover">
                <a class="dim" href="{{url('/contact')}}">
                    <div class="flex-center"><h3>Contact</h3></div>
                    <img class="img-fluid" src="{{ asset('storage/pages/home/Contact.jpeg') }}" title="Contact">
                </a>
            </div>
            <div class="medium hover">
                <a class="dim" href="{{url('/book')}}">
                    <div class="flex-center"><h3>Booking</h3></div>
                    <img class="img-fluid" src="http://placehold.it/400x180/0F5759/FFFFFF" title="BOOK">
                </a>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="section-heading text-center">Welcome to Tweed Podiatry</h2>
                    <p class="text-muted">
                        At Tweed Podiatry, we understand that foot, ankle and lower limb problems can be incredibly
                        painful
                        and have a real impact on your quality of life and your ability to enjoy activities of sport and
                        daily living. Whether you are a runner with a niggling pain keeping you from achieving your next
                        milestone or you are on your feet all day and pain is interfering with your work or you are
                        having
                        difficulty managing your foot care and want help and advice to stay active, we can help.
                        <br><br>
                        Tweed Podiatry was founded to set the highest standard for foot and ankle care in the Scottish
                        Borders. Our expert team care passionately about providing a professional and friendly service
                        to
                        every person we meet and will work closely with you to understand the nature of your problem and
                        the
                        strategies we can implement to get you moving forward towards your goals.
                        <br><br>
                        ~ Tweed Podiatry, The foot and ankle experts.
                    </p>
                </div>
            </div>
        </section>

        <hr>

        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="section-heading text-center">Where are we?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d258.38687314243055!2d-2.4347329381081324!3d55.598827556701536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a100554a238a0f8!2sHector+Innes+photography!5e0!3m2!1sen!2suk!4v1517955144360"
                            width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-3 align-content-center">
                    <p class="text-muted align-self-center"> You can find us between X and Y at the Kelso Square as
                        shown on this google maps link.
                        our opening hours are:
                        <br>Monday: 09:00 - 17:00
                        <br>Tuesday: Closed
                        <br>Wednesday: Closed
                        <br>Thursday: 09:00 - 17:00
                        <br>Friday: 09:00 - 17:00
                    </p>
                </div>
            </div>
        </section>

    </main>
@endsection