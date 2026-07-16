@extends('layouts.default')

@php
    $title = 'Contact Dr. Aparna Venugopal | Book Appointment';
@endphp

@section('meta_desc', 'Contact Dr. Aparna Venugopal, General & Laparoscopic Surgeon. Book your appointment, find clinic address, phone number and email.')

@section('content')

<main class="contact-page">

    {{-- Breadcrumb --}}
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="about-simple-title display-3 mb-2">Contact Us</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5">Contact</span>
                </div>
            </div>
        </div>
    </section>

   <!-- Contact Section -->
<section class="contact-section">
    <div class="container">

        <div class="contact-wrapper">

            <div class="row g-0">

                <!-- Left -->
                <div class="col-lg-5 contact-left d-flex flex-column justify-content-left">

                <div class="contact-item">

    <div class="contact-icon">
        <i class="fa-solid fa-location-dot"></i>
    </div>

    <div class="contact-content">
        <h5>Clinic Address</h5>

        <p class="text-white fs-5">
            <a href="https://maps.app.goo.gl/DjLUjEUB3SMB4hA47" target="_blank" class="text-white text-decoration-none fs-5">
                Hriday Hospital<br>
                First Floor, Rahul Downtown,<br>
                Mumbai Pune Bypass Rd Flyover,<br>
                Beside SK CNG Pump, Punawale,<br>
                Pimpri-Chinchwad, Maharashtra 411033
            </a>
        </p>
    </div>

</div>

<div class="contact-item">

    <div class="contact-icon">
        <i class="fa-solid fa-phone"></i>
    </div>

    <div class="contact-content">
        <h5>Phone</h5>

        <a href="tel:+919495208068" class="fs-5">
            +91 94952 08068
        </a>
    </div>

</div>

<div class="contact-item">

    <div class="contact-icon">
        <i class="fa-solid fa-envelope"></i>
    </div>

    <div class="contact-content">
        <h5>Email</h5>

        <a href="mailto:venugopalaparna9217@gmail.com" class="fs-5">
            venugopalaparna9217@gmail.com
        </a>
    </div>

</div>

                </div>

                <!-- Right -->
                <div class="col-lg-7 contact-right">

                    <div class="contact-map">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.7846261173454!2d73.7402571758304!3d18.632540265743234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bb005040649d%3A0xe17f5fd8bcb0637c!2sHriday%20Mother%20and%20Child%20Care%20Hospital!5e0!3m2!1sen!2sin!4v1784201034611!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

</main>

@endsection