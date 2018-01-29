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
<!--Scripts-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
