<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<div id="app" >
    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                Strona Główna
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item bg-secondary">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        &nbsp
                        @if (Route::has('register'))
                            <li class="nav-item bg-secondary ">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item ">
                            <a class="navbar-brand text-white" href="{{ url('/home') }}">
                                Projekty
                            </a>
                        </li>
                        &nbsp
                        <li class="nav-item ">
                            <a class="navbar-brand text-white" href="{{ url('/fakturomat') }}">
                                Faktury
                            </a>
                        </li>
                        &nbsp &nbsp &nbsp

                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle bg-secondary text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right bg-secondary " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white bg-secondary" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item text-white bg-secondary" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Settings') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Projekt 19113</h1>

                    <main class="py-4">

                        @yield('content')
                    </main>


                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="/fakturomat">
                    <h2 class="post-title">
                        Fakturomat v4.0
                    </h2>
                    <h3 class="post-subtitle">
                        W wersji 4.0 zaimplementowano funkcjonalność edytowania oraz usuwania faktur.
                    </h3>
                </a>
                <p class="post-meta">Przejdź do
                    <a href="/fakturomat">FAKTUROMAT</a>
                    aby dowiedzieć się więcej</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="/fakturomat">
                    <h2 class="post-title">
                        Fakturomat v3.0
                    </h2>
                    <h3 class="post-subtitle">
                        W wersji 3.0 dodano funkcjonalność, która sprawia, że można wyświetlać tylko i wyłącznie faktury użytkownika, który je utworzył.
                    </h3>
                </a>
                <p class="post-meta">Przejdź do
                    <a href="/fakturomat">FAKTUROMAT</a>
                    aby dowiedzieć się więcej</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="/fakturomat">
                    <h2 class="post-title">
                        Fakturomat v2.0
                    </h2>
                    <h3 class="post-subtitle">
                        W wersji 2.0 dodano możliwość dodawania faktur.
                    </h3>
                </a>
                <p class="post-meta">Przejdź do
                    <a href="/fakturomat">FAKTUROMAT</a>
                    aby dowiedzieć się więcej</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="/fakturomat">
                    <h2 class="post-title">
                        Fakturomat
                    </h2>
                    <h3 class="post-subtitle">
                        W wersji 1.0 utworzono strone fakturomatu wraz z wyświetlaniem listy dodanych faktur.
                    </h3>
                </a>
                <p class="post-meta">Przejdź do
                    <a href="/fakturomat">FAKTUROMAT</a>
                    aby dowiedzieć się więcej</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Starsze wpisy &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>



</body>

</html>





