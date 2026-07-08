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
                    <span class="mx-2">/</span>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </section>

   <!-- Contact Section -->
<section class="section-padding">
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
            Hriday Mother &amp; Child Care Hospital<br>
            First Floor, Rahul Downtown,<br>
            Mumbai Pune Bypass Rd Flyover,<br>
            Beside SK CNG Pump, Punawale,<br>
            Pimpri-Chinchwad, Maharashtra 411033
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
                            src="https://maps.google.com/maps?q=Hriday+Mother+%26+Child+Care+Hospital,+Punawale&t=&z=14&ie=UTF8&iwloc=&output=embed"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

</main>

@endsection