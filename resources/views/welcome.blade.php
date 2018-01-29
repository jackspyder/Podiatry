@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Coming Soon
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>

    <section id="options" class="bg-light">
        <div class="large hover">
            <a href="{{url('/conditions')}}">
                <img class="img-fluid" src="http://placehold.it/640x600" title="CONDITON">
            </a>
        </div>

        <div class="medium hover">
            <a href="{{url('/services')}}">
                <img class="img-fluid" src="http://placehold.it/640x300" title="SERVICE">
            </a>
        </div>

        <div class="large hover">
            <a href="{{url('/book')}}">
                <img class="img-fluid" src="http://placehold.it/640x600" title="BOOK">
            </a>
        </div>

        <div class="small hover">
            <a href="{{url('/blog')}}">
                <img class="img-fluid" src="http://placehold.it/320x300" title="Blog">
            </a>
        </div>

        <div class="small hover">
            <a href="{{url('/contact')}}">
                <img class="img-fluid" src="http://placehold.it/320x300" title="Contact">
            </a>
        </div>
    </section>

    <section id="about" class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="section-heading text-center">About Us</h2>
                <p class="text-muted">The main ethos of Tweed Podiatry is to make sure the experience of every person
                    visiting the
                    practice is exceptional from start to finish and we aim to achieve this in a number of ways:
                    <br><u>A Warm Welcome</u><br>
                    We want every visitor to feel right at home in our practice. Our friendly and experienced team are
                    on hand to greet you and offer you a tea or coffee in our modern reception area so you can sit back
                    and relax before being seen. If you have any other requests or questions while you wait, we will be
                    only too happy to help!
                    <br><u>Providing Clinical Excellence</u><br>
                    We take your experience of being treated by us very seriously. We pride ourselves in offering the
                    highest standards of treatment that are both safe, effective, confidential and evidence-based. To
                    achieve this, our team are constantly engaging in new learning and training to stay on top of the
                    latest developments in pediatric medicine.
                    <br><u>Comprehensive Care</u><br>
                    Our highly qualified and experienced team are able to deliver exceptional care for all manner of
                    foot,
                    ankle and lower limb conditions ranging from sports injuries to corn removal to nail surgery to
                    running analysis and the list goes on! All of our treatments are delivered with the same attention
                    to
                    detail in our brand-new clinic fitted with state-of- art equipment.
                    <br><u>Empowering Others</u><br>
                    We are real believers in sharing our knowledge and expertise for two important reasons; to help our
                    patients by equipping them with better understanding of the nature of their problem, and to grow a
                    network a like-minded professionals in the Scottish Borders seeking to achieve better outcomes for
                    their patients/clients. Part of our commitment to this involves providing several training sessions
                    throughout the year on various lower limb topics to our fellow podiatrists and other colleagues.
                    <br><u>Always Listening</u><br>
                    We see all manner of foot, ankle and lower limb problems in our clinics but what is far more varied
                    are the people who we have the privilege to meet. Everyone has a unique story to tell and we want
                    to hear it. We know that every individual’s beliefs, experiences and expectations can and should
                    guide the way we look at their problem. That is why we strive to listen closely, to put you at the
                    centre of the picture and work with you to make your experience with us personal and exceptional.
                </p>
            </div>
        </div>
    </section>

    <section id="timeline">
        <div class="container">
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
                                <img class="rounded-circle img-fluid" src="http://placehold.it/450x450" alt="">
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
                                <img class="rounded-circle img-fluid" src="http://placehold.it/450x450" alt="">
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
                                <img class="rounded-circle img-fluid" src="http://placehold.it/450x450" alt="">
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
                                <img class="rounded-circle img-fluid" src="http://placehold.it/450x450s" alt="">
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
                                <img class="rounded-circle img-fluid" src="http://placehold.it/450x450" alt="">
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
                                <img class="rounded-circle img-fluid" src="http://placehold.it/450x450s" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>September 2017</h4>
                                    <h4 class="subheading">Appointed as Part-time Lecturer at QMU</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Appointed as a lecturer in the field of Podiatry at Queen
                                        Margaret University, teaching subjects such as anatomy and orthotic manufacture,
                                        and supervising student clinics in varied settings including nail surgery.</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="http://placehold.it/450x450" alt="">
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
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- /TimeLine-->
@endsection