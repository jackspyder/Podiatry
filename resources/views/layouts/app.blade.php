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
<body id="app">

<!--navigation-->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">T|P</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Home</a>
                <a class="nav-item nav-link" href="#">Services</a>
                <a class="nav-item nav-link" href="#">Conditions</a>
                <a class="nav-item nav-link" href="#">Contact</a>
                <a class="nav-item nav-link" href="#">Book</a>
            </div>
        </div>
    </div>
</nav><!--/nav-->

<!--masthead-->
<header id="masthead bg-light" style="height: 100px">

</header>
<!--/masthead-->

<main>
    @yield('content')
</main>

<!-- Foot Contact Details -->
<div class="jumbotron jumbotron-fluid" style="padding-bottom: 0px">
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
            <div class="col-4 pull-right">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram fa-3x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook fa-3x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com" target="_blank">
                            <i class="fa fa-linkedin fa-3x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <span>Website Produced by <a href="#">Jack Powell</a></span>
            </div>
            <div class="col-md-4 text-center">
                <span class="copyright">Copyright &copy; tweedpodiatry.com 2017</span>
            </div>
            <div class="col-md-4 text-right">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--Scripts-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
