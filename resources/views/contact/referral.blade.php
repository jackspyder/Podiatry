@extends('layouts.app')

@section('content')
    <main class="container-fluid">

        <section id="heading">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h2 class="heading">Referral Form</h2>
                    <p class="text-muted">This form is intended for use by healthcare professionals wishing to quickly
                        and easily make referrals for potential patients to be seen at our clinics. If you are a member
                        of the public, please contact us by phone/email or by using our online booking service or online
                        enquiries form.</p>
                </div>
            </div>
        </section>

        <section>

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    @if(session('message'))
                        <div class='alert alert-success'>
                            {{ session('message') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="/contact/referral">
                        {{ csrf_field() }}
                        <h2 class="heading">Referrer's Details</h2>
                        <div class="form-group">
                            <label for="ref_name">Referrer Name: </label>
                            <input type="text" class="form-control" id="ref_name" placeholder="Referrer Name" name="ref_name"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="ref_title">Referrer title: </label>
                            <input type="text" class="form-control" id="ref_title" placeholder="Referrer Title" name="ref_title"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="ref_profession">Referrer Profession: </label>
                            <input type="text" class="form-control" id="ref_profession" placeholder="Referrer Profession" name="ref_profession"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="work_address">Work Address: </label>
                            <textarea type="text" class="form-control luna-message" id="work_address"
                                      placeholder="Referrer Work Address" name="work_address" required></textarea>
                        </div>

                        <h2 class="heading">Patient's Details</h2>

                        <div class="form-group">
                            <label for="pat_name">Patient Name: </label>
                            <input type="text" class="form-control" id="pat_name" placeholder="Patient Name" name="pat_name"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="pat_title">Patent title: </label>
                            <input type="text" class="form-control" id="pat_title" placeholder="Patient Title" name="pat_title"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="pat_address">Patient's Home Address: </label>
                            <textarea type="text" class="form-control luna-message" id="pat_address"
                                      placeholder="Patient Home Address" name="pat_address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="pat_number">Patient Number: </label>
                            <input type="number" class="form-control" id="pat_number" placeholder="01573 123 456"
                                   name="pat_number" required>
                        </div>

                        <div class="form-group">
                            <label for="pat_email">Patient Email: </label>
                            <input type="text" class="form-control" id="pat_email" placeholder="john@example.com"
                                   name="pat_email" required>
                        </div>

                        <div class="form-group">
                            <label for="reason">Reason for Referral: </label>
                            <textarea type="text" class="form-control luna-message" id="reason"
                                      placeholder="Type your reason here" name="reason" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="medical">Any relevant medical history (including current conditions, medication and allergies):</label>
                            <textarea type="text" class="form-control luna-message" id="medical"
                                      placeholder="Type any medical information here" name="medical" required></textarea>
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