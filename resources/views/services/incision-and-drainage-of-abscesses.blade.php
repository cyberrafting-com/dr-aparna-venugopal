@extends('layouts.default')

@php
$title = 'Incision & Drainage of Abscesses | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Incision and drainage is a minor surgical procedure used to treat abscesses by releasing the trapped pus, relieving pain, and promoting healthy healing.')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Incision & Drainage of Abscesses</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Incision & Drainage</span>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section about-main-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-4  mb-lg-0">
                    <div class="service-image-wrapper position-relative z-1">
                        <!-- Transparent primary color background offset to bottom-left -->
                        <div class="position-absolute rounded-4 service-image-bg"></div>
                        
                        <!-- Image -->
                        <img src="{{ asset('resources/assets/images/services/incision-and-drainage-of-abscesses.png') }}" alt="Incision and Drainage of Abscesses" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Incision & Drainage of Abscesses</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            An abscess is a painful collection of pus that develops under the skin due to a bacterial infection or inflammation. It can occur in different areas of the body and may cause swelling, redness, tenderness, and discomfort.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            While small abscesses may sometimes improve with medical treatment, larger or painful abscesses often require a minor surgical procedure to remove the trapped pus and allow proper healing. Timely treatment helps prevent the infection from spreading to surrounding tissues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section education-area bg-light-theme">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-12">
                    <div class="clinical-note shadow-sm bg-white p-4 p-md-5 rounded">
                        
                        <h2 class="about-simple-title mb-4 fs-3">Recognising an Abscess That Needs Medical Attention</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">You should consult a surgeon if you notice:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">A painful lump or swelling under the skin</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Redness, warmth, or tenderness around the affected area</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Pus or fluid discharge from the swelling</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Increasing size or worsening pain</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Fever or signs of infection</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="about-simple-title mb-4 fs-3">How Is Abscess Drainage Performed?</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        Incision and drainage is a procedure where a small opening is made over the abscess to carefully release the accumulated pus. The area is cleaned properly to reduce infection and support healing.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Depending on the size and location of the abscess, the procedure may be performed under local anaesthesia. In some cases, additional treatment or antibiotics may be recommended to manage the infection.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Recovery After Abscess Treatment</h2>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        After drainage, proper wound care and follow-up are important for complete healing. Most patients experience relief from pain and pressure after the procedure and can gradually return to normal activities as the wound heals.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Specialised Surgical Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides safe and effective treatment for abscesses with a focus on timely diagnosis, appropriate surgical management, patient comfort, and faster recovery.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('contact') }}" class="btn-primary-theme btn-text-sm">Book Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection