@extends('layouts.app')
@section('content')
    <main>
        <section id="options">
            <div class="medium hover">
                <a class="dim" href="{{url('/services')}}">
                    <div class="flex-center"><h3>Services</h3></div>
                    <img class="img-fluid" src="{{ asset('/storage/pages/options/services.webp') }}" title="SERVICE">
                </a>
            </div>
            <div class="large hover">
                <a class="dim" href="{{url('/conditions')}}">
                    <div class="flex-center"><h3>Conditions</h3></div>
                    <img class="img-fluid" src="{{ asset('/storage/pages/options/conditions.webp') }}"
                         alt="link to conditions page">
                </a>
            </div>
            <div class="medium hover">
                <a class="dim" href="{{url('/about')}}">
                    <div class="flex-center"><h3>About Us</h3></div>
                    <img class="img-fluid" src="{{ asset('/storage/pages/options/about.webp') }}" title="About">
                </a>
            </div>
            <div class="small hover">
                <a class="dim" href="{{url('/blog')}}">
                    <div class="flex-center"><h3>Blog</h3></div>
                    <img class="img-fluid" src="{{ asset('storage/pages/options/blog.webp') }}" title="Blog">
                </a>
            </div>
            <div class="small hover">
                <a class="dim" href="{{url('/contact')}}">
                    <div class="flex-center"><h3>Contact</h3></div>
                    <img class="img-fluid" src="{{ asset('storage/pages/options/contact.webp') }}" title="Contact">
                </a>
            </div>
            <div class="medium hover">
                <a class="dim" href="{{url('/book')}}">
                    <div class="flex-center"><h3>Booking</h3></div>
                    <img class="img-fluid" src="{{ asset('storage/pages/options/booking.webp') }}" title="BOOK">
                </a>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="heading text-center">Welcome to Tweed Podiatry</h2>
                    <p class="text-muted">
                        At our clinic, we understand that foot, ankle and lower limb problems can be incredibly
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
                        ~  Robert McCririck - Practice Owner, Podiatrist, Lecturer.
                    </p>
                </div>
            </div>
        </section>

        <hr>

        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="heading text-center">Where are we?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9016.729057267694!2d-2.4342738!3d55.5988415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45f822ef4532d580!2sTweed+Podiatry!5e0!3m2!1sen!2sie!4v1518390372326"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-3 align-content-center">
                    <p class="text-muted align-self-center"> You can find us next door to Rutherford's Micropub and 2
                        doors down from the Cross Keys Hotel in Kelso town square.<br><br>
                        Our opening hours are:
                        <br>Monday: 09:00 - 17:00
                        <br>Tuesday: 09:30 - 17:30
                        <br>Wednesday: Closed
                        <br>Thursday: Closed
                        <br>Friday: 09:00 - 17:00
                        <br>Saturday: 09:30 - 13:30
                        <br>Sunday: Closed
                    </p>
                </div>
            </div>
        </section>

    </main>
@endsection