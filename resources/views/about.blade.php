@extends('layouts.app')
@section('content')

    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="heading">About Us</h2>
                    <p class="text-muted">The main ethos of Tweed Podiatry is to make sure the experience of every
                        person
                        visiting the
                        practice is exceptional from start to finish and we aim to achieve this in a number of ways:</p>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <h5 class="heading">A Warm Welcome</h5>
                    <p class="text-muted">
                        We want every visitor to feel right at home in our practice. Our friendly and experienced team
                        are
                        on hand to greet you and offer you a tea or coffee in our modern reception area so you can sit
                        back
                        and relax before being seen. If you have any other requests or questions while you wait, we will
                        be
                        only too happy to help!
                    </p>

                    <h5 class="heading">Providing Clinical Excellence</h5>
                    <p class="text-muted">
                        We take your experience of being treated by us very seriously. We pride ourselves in offering
                        the
                        highest standards of treatment that are both safe, effective, confidential and evidence-based.
                        To
                        achieve this, our team are constantly engaging in new learning and training to stay on top of
                        the
                        latest developments in podiatric medicine.
                    </p>

                    <h5 class="heading">Comprehensive Care</h5>
                    <p class="text-muted">
                        Our highly qualified and experienced team are able to deliver exceptional care for all manner of
                        foot,
                        ankle and lower limb conditions ranging from sports injuries to corn removal to nail surgery to
                        running analysis and the list goes on! All of our treatments are delivered with the same
                        attention
                        to detail in our brand-new clinic fitted with state of the art equipment.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="heading">Empowering Others</h5>
                    <p class="text-muted">
                        We are real believers in sharing our knowledge and expertise for two important reasons; to help
                        our
                        patients by equipping them with better understanding of the nature of their problem, and to grow
                        a
                        network a like-minded professionals in the Scottish Borders seeking to achieve better outcomes
                        for
                        their patients/clients. Part of our commitment to this involves providing several training
                        sessions
                        throughout the year on various lower limb topics to our fellow podiatrists and other colleagues.
                    </p>

                    <h5 class="heading">Always Listening</h5>
                    <p class="text-muted">
                        We see all manner of foot, ankle and lower limb problems in our clinics but what is far more
                        varied
                        are the people who we have the privilege to meet. Everyone has a unique story to tell and we
                        want
                        to hear it. We know that every individual’s beliefs, experiences and expectations can and should
                        guide the way we look at their problem. That is why we strive to listen closely, to put you at
                        the
                        centre of the picture and work with you to make your experience with us personal and
                        exceptional.
                    </p>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section id="team">
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading">About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="team-member">
                        <img class="rounded-circle img-fluid" src="{{ asset('storage/robert.jpeg') }}"
                             alt="">
                        <h4>Mr Robert C McCririck MSc BSc(Hons) MChS HCPC reg.</h4>
                        <p class="text-muted">Podiatrist</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/tweedpodiatry" target="_blank" rel="noopener">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/tweed_podiatry/" target="_blank" rel="noopener">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/robert-mccririck-0390445b/" target="_blank" rel="noopener">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <p class="large text-muted">Having graduated in 2013 with a 1st class honours degree in Podiatry
                        from Queen Margaret University, I have gone on to practice at specialist level in the NHS and in
                        private practice, both in the UK and Canada. I have a special interest in musculoskeletal
                        injuries, especially running-related injuries, and love to work with people to understand the
                        nature of their problem and the strategies we can use to improve their symptoms and achieve
                        their goals.</p>
                    <p class="large text-muted">
                        I am passionate about constantly learning and developing my abilities to help my patients. As
                        part of my commitment to great patient care, I have recently achieved a Masters degree in
                        Podiatric Surgery at Queen Margaret University (including research into fatigue in runners) and
                        gained accreditation in steroid injection therapy.</p>
                    <p class="large text-muted">
                        Since my return from Canada in 2016, I have settled back in the Scottish Borders, a stone’s
                        throw from the family farm where I grew up. I now hold posts as an MSK Specialist Podiatrist for
                        Footcare Scotland at the prestigious Edinburgh Clinic and as a visiting lecturer at Queen
                        Margaret University where my teaching interests include lower limb anatomy, orthotic
                        prescription and nail surgery.</p>
                    <p class="large text-muted">
                        Outside of work, I am keen amateur cook, traveller, hiker and life-long running enthusiast,
                        starting as a 100-200 meter competitive sprinter in my youth and more recently transitioning to
                        long distances. I have had an incredibly fortunate career thus far and am thrilled to have
                        founded Tweed Podiatry where I hope now to bring my skills and experience into delivering a
                        truly outstanding foot and ankle service to the people of my local community.
                    </p>
                </div>
            </div>
        </section>

        <section id="timeline" class="container">
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading">How did we get here?</h2>
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
                                    <h4 class="heading">July 2013</h4>
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
                                    <h4 class="heading">March 2014</h4>
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
                                    <h4 class="heading">May 2016</h4>
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
                                    <h4 class="heading">July 2017</h4>
                                    <h4 class="subheading">Attained an MSc</h4>
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
                                    <h4 class="heading">August 2017</h4>
                                    <h4 class="subheading">Took position at Footcare Scotland</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Appointed to the prestigious post of specialist
                                        musculoskeletal podiatrist with Footcare Scotland.</p>
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
                                    <h4 class="heading">September 2017</h4>
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
                                     src="{{asset('/storage/pages/home/logo.png')}}"
                                     style="width: 100px; z-index: 1; padding-top: 1rem" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="heading">February 2018</h4>
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