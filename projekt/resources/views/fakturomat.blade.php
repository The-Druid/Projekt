@extends('layouts.FakTheme')
    @section('fakturyContent')

<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{asset('assets/img/avataaars.svg')}}" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Fakturomat</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Twoje faktury w jednym miejscu</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 id="#lista" class="page-section-heading text-center text-uppercase text-secondary mb-0"><a href="/faktury">Lista faktur</a></h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <center>Lista Twoich faktur zawsze pod Twoją reką!</center>
</section>

<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 id="#dodaj" class="page-section-heading text-center text-uppercase text-secondary mb-0"><a href="/faktury/dodaj">Dodaj fakture</a></h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <center>Prosto, szybko i wygodnie.</center>
        <!-- Contact Section Form-->
        <div class="row">

        </div>
    </div>
</section>
    @endsection
