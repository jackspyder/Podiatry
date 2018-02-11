<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Tweed Podiatry', 'Tweed Podiatry') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="navbar-light themed">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center justify-content-between">
                    <span class="navbar-text"><b>Call: 01573 228 098  |  Email: robert@tweedpodiatry.com</b></span>
                </div>
            </div>
        </div>
    </div>
    <!--masthead-->
    <header id="masthead bg-light" style="height: 250px; background-color: whitesmoke">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 horiz-align">
                    <img src="{{asset('/storage/logo.webp')}}" height="200" width="150">
                    <h1 class="title">Tweed Podiatry</h1>
                </div>
            </div>
        </div>
    </header><!--/masthead-->

    <!--navigation-->
    <nav class="navbar navbar-expand-md sticky-top navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{url('/')}}"><b>Home</b></a>
                    <a class="nav-item nav-link" href="{{url('/services')}}"><b>Services</b></a>
                    <a class="nav-item nav-link" href="{{url('/conditions')}}"><b>Conditions</b></a>
                    <a class="nav-item nav-link" href="{{url('/contact')}}"><b>Contact/Referral</b></a>
                    <a class="nav-item nav-link" href="{{url('/book')}}"><b>Booking</b></a>
                    <a class="nav-item nav-link" href="{{url('/about')}}"><b>About</b></a>
                </div>
            </div>
        </div>
    </nav><!--/nav-->

        @yield('content')

    <!-- Foot Contact Details -->
    <footer class="themed navbar-light">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    <p class="text-muted align-self-center">
                        <b>Tel:</b> 01573 228 098<br>
                        <br> <b>Email: </b>robert@tweedpodiatry.com
                        <br>
                        <b>Address:</b><br>
                        40-41 The Square<br>
                        Kelso<br>
                        Roxburghshire<br>
                        TD5 7HL<br>
                    </p>
                </div>
                <div class="col-4 pull-right flex-center">
                    <ul class="list-inline social-buttons align-self-center">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/tweedpodiatry" target="_blank" rel="noopener">
                                <i class="fa fa-facebook fa-4x"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/tweed_podiatry/" target="_blank" rel="noopener">
                                <i class="fa fa-instagram fa-4x"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/robert-mccririck-0390445b/" target="_blank" rel="noopener">
                                <i class="fa fa-linkedin fa-4x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--Scripts-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
