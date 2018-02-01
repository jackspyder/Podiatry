@extends('layouts.app')
@section('content')
    <section id="options" class="bg-light">


        <div class="medium hover">
            <a href="{{url('/services')}}">
                <div class="flex-center"><h3>Services</h3></div>
                <img class="img-fluid" src="{{ asset('storage/pages/placeholders/medium.png') }}" title="SERVICE">

            </a>
        </div>

        <div class="large hover">
            <a href="{{url('/conditions')}}">
                <div class="flex-center">
                    <h3>Conditions</h3>
                </div>
                <img class="img-fluid" src="http://placehold.it/640x600/0F5759/FFFFFF"
                     alt="link to conditions page">
            </a>
        </div>

        <div class="small hover">
            <a href="{{url('/blog')}}">
                <div class="flex-center"><h3>About Me</h3></div>
                <img class="img-fluid" src="{{ asset('storage/pages/placeholders/small.png') }}" title="me">
            </a>
        </div>

        <div class="small hover">
            <a href="{{url('/blog')}}">
                <div class="flex-center"><h3>About Clinic</h3></div>
                <img class="img-fluid" src="{{ asset('storage/pages/placeholders/small.png') }}" title="Clinic">
            </a>
        </div>


        <div class="small hover">
            <a href="{{url('/blog')}}">
                <div class="flex-center"><h3>Blog</h3></div>
                <img class="img-fluid" src="{{ asset('storage/pages/placeholders/small.png') }}" title="Blog">
            </a>
        </div>

        <div class="small hover">
            <a href="{{url('/contact')}}">
                <div class="flex-center"><h3>Contact</h3></div>
                <img class="img-fluid" src="{{ asset('storage/pages/placeholders/small.png') }}" title="Contact">
            </a>
        </div>

        <div class="medium hover">
            <a href="{{url('/book')}}">
                <div class="flex-center"><h3>Booking</h3></div>
                <img class="img-fluid" src="{{ asset('storage/pages/placeholders/medium.png') }}" title="BOOK">
            </a>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2 class="section-heading text-center">About Us</h2>
                <p class="text-muted">
                    At Tweed Podiatry, we understand that foot and ankle problems can be incredibly painful and have a
                    real impact on your quality of life and your ability to enjoy activities of sport and daily living.
                    This is where we come in. Tweed Podiatry was founded to set the standard for foot and ankle care in
                    the Scottish Borders. Our expert team care passionately about providing a professional and friendly
                    service to every patient we meet and will work closely with you to understand the nature of your
                    problem and the strategies we can implement to get you moving forward towards your goals.
                    <br>
                    ~ Tweed Podiatry, The foot and ankle experts.
                </p>
            </div>
        </div>

    </section>


    <section id="about" class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="section-heading text-center">About Us</h2>
                <p class="text-muted">The main ethos of Tweed Podiatry is to make sure the experience of every person
                    visiting the
                    practice is exceptional from start to finish and we aim to achieve this in a number of ways:
                </p>
            </div>

            <div class="col-md-6">
                <h5>A Warm Welcome</h5>
                <p class="text-muted">
                    We want every visitor to feel right at home in our practice. Our friendly and experienced team are
                    on hand to greet you and offer you a tea or coffee in our modern reception area so you can sit back
                    and relax before being seen. If you have any other requests or questions while you wait, we will be
                    only too happy to help!
                </p>

                <h5>Providing Clinical Excellence</h5>
                <p class="text-muted">
                    We take your experience of being treated by us very seriously. We pride ourselves in offering the
                    highest standards of treatment that are both safe, effective, confidential and evidence-based. To
                    achieve this, our team are constantly engaging in new learning and training to stay on top of the
                    latest developments in pediatric medicine.
                </p>

                <h5>Comprehensive Care</h5>
                <p class="text-muted">
                    Our highly qualified and experienced team are able to deliver exceptional care for all manner of
                    foot,
                    ankle and lower limb conditions ranging from sports injuries to corn removal to nail surgery to
                    running analysis and the list goes on! All of our treatments are delivered with the same attention
                    to detail in our brand-new clinic fitted with state-of- art equipment.
                </p>
            </div>
            <div class="col-md-6">
                <h5>Empowering Others</h5>
                <p class="text-muted">
                    We are real believers in sharing our knowledge and expertise for two important reasons; to help our
                    patients by equipping them with better understanding of the nature of their problem, and to grow a
                    network a like-minded professionals in the Scottish Borders seeking to achieve better outcomes for
                    their patients/clients. Part of our commitment to this involves providing several training sessions
                    throughout the year on various lower limb topics to our fellow podiatrists and other colleagues.
                </p>

                <h5>Always Listening</h5>
                <p class="text-muted">
                    We see all manner of foot, ankle and lower limb problems in our clinics but what is far more varied
                    are the people who we have the privilege to meet. Everyone has a unique story to tell and we want
                    to hear it. We know that every individual’s beliefs, experiences and expectations can and should
                    guide the way we look at their problem. That is why we strive to listen closely, to put you at the
                    centre of the picture and work with you to make your experience with us personal and exceptional.
                </p>
            </div>
        </div>
    </section>
    <section id="timeline" class="container">
        <hr>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">How did we get here?</h2>
                <h3 class="section-subheading text-muted">Take a look at our journey below.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">

                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid"
                                 src="{{ asset('storage/pages/placeholders/tiny.png') }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2013</h4>
                                <h4 class="subheading">Graduated with Honours</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Having gained BSc with Merit the year prior and began
                                    part-time role in NHS Tayside, graduated this year with a 1st class honours
                                    degree in Podiatry from Queen Margaret University, Edinburgh as well as being
                                    awarded the Algeos award for best clinic audit. </p>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid"
                                 src="{{ asset('storage/pages/placeholders/tiny.png') }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2014</h4>
                                <h4 class="subheading">Transitioned to full time NHS Specialist</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Began working full-time for NHS Tayside and shortly after
                                    moved into a full-time specialist role.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid"
                                 src="{{ asset('storage/pages/placeholders/tiny.png') }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>May 2016</h4>
                                <h4 class="subheading">Took position in specialist Canadian clinic.</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Immigrated to Canada to work in a highly specialised podiatry
                                    clinic focused on the assessment and treatment of complex musculoskeletal
                                    injuries.</p>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid"
                                 src="{{ asset('storage/pages/placeholders/tiny.png') }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2017</h4>
                                <h4 class="subheading">Attained an Msc</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Awarded a Masters degree in Podiatric Surgery from Queen
                                    Margaret University, Edinburgh.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid"
                                 src="{{ asset('storage/pages/placeholders/tiny.png') }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>August 2017</h4>
                                <h4 class="subheading">Took position at footcare Scotland</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Appointed to the prestigious post of specialist
                                    musculoskeletal podiatrist with Foot Care Scotland.</p>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid"
                                 src="{{ asset('storage/pages/placeholders/tiny.png') }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>September 2017</h4>
                                <h4 class="subheading">Appointed as visiting Lecturer at QMU</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Appointed as a lecturer in the field of Podiatry at Queen
                                    Margaret University, teaching subjects such as anatomy and orthotic manufacture,
                                    and supervising student clinics in varied settings including nail surgery.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-image" style="background-color: white">
                            <img class="rounded-circle"
                                 src="{{asset('/storage/pages/home/logo.png')}}" style="width: 100px; z-index: 1; padding-top: 1rem" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>February 2018</h4>
                                <h4 class="subheading">Opening of Tweed Podiatry Clinic</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">The grand opening of Tweed Podiatry, the Scottish Borders'
                                    premier foot and ankle clinic. A purpose-designed practice with a friendly
                                    atmosphere, brand new high-end equipment, run by one of the most highly
                                    qualified podiatrists in the Scottish Borders.</p>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h5>Be Part
                                <br>Of Our
                                <br>Story!</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- /TimeLine-->
@endsection