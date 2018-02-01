<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'T|P') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div id="app">
    <section class="navbar-light" style="background: #9AD3D7">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center justify-content-between">
                    <span class="navbar-text"><b>Call: 01573 224 224  |  Email: enquieries@tweedpodiatry.com</b></span>
                </div>
            </div>
        </div>
    </section>
    <!--masthead-->
    <header id="masthead bg-light" style="height: 250px; background-color: whitesmoke">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 horiz-align">
                    <img src="{{asset('/storage/pages/home/logo.png')}}" height="200" width="150">
                    <h1>Welcome to Tweed Podiatry</h1>
                </div>
            </div>
        </div>
    </header><!--/masthead-->

    <!--navigation-->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light">
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
                </div>
            </div>
        </div>
    </nav><!--/nav-->

    <main>
        @yield('content')
    </main>

    <!-- Foot Contact Details -->
    <section id="foot-panel" style="background-color: #9AD3D7">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    <p class="text-muted">
                        Tel: 01573 123 456<br>
                        <br>
                        Address:<br>
                        123 The Square<br>
                        Kelso<br>
                        TD5 1AB<br>
                        <br>
                        Email: info@tweedpodiatry.com
                    </p>
                </div>
                <div class="col-4 pull-right flex-center">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com" rel="noopener">
                                <i class="fa fa-facebook fa-4x"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.instagram.com" rel="noopener">
                                <i class="fa fa-instagram fa-4x"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com" rel="noopener">
                                <i class="fa fa-linkedin fa-4x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <span>Website Produced by <a href="https://jpowell.me" rel="noopener">Jack Powell</a></span>
            </div>
            <div class="col-md-4 text-center">
                <span class="copyright">Copyright &copy; tweedpodiatry.com 2017</span>
            </div>
            <div class="col-md-4 text-right">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#" target="_blank">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" target="_blank">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!--Scripts-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
