@extends('layouts.default')

@php
$title = 'Wound Debridement | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Expert wound debridement services for removing dead tissue, preventing infection, and promoting faster healing of chronic or severe wounds.')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Wound Debridement</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Wound Debridement</span>
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
                        <img src="{{ asset('resources/assets/images/services/wound.png') }}" alt="Wound Debridement" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Wound Debridement</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            Wounds that do not heal properly may develop dead tissue, infection, or damaged areas that delay the natural healing process. Wound debridement is a specialised procedure used to remove unhealthy or non-viable tissue from a wound, allowing healthy tissue to grow and supporting better recovery.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            This treatment may be required for wounds caused by injuries, infections, pressure sores, diabetic ulcers, or surgical complications. Early assessment and proper wound management help reduce the risk of infection and promote effective healing.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">When Is Wound Debridement Required?</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">A doctor may recommend wound debridement if you notice:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Presence of dead or damaged tissue in a wound</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Wounds that are slow to heal</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Signs of infection such as redness, swelling, or discharge</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Persistent pain or worsening wound condition</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Non-healing wounds due to underlying health conditions</span>
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
                    <h2 class="about-simple-title mb-4 fs-3">Assessment & Wound Cleaning Process</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        A detailed evaluation is performed to understand the depth, severity, and condition of the wound. Based on the wound type and tissue damage, the appropriate debridement method is selected.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        During the procedure, unhealthy tissue is carefully removed to clean the wound area and create a healthier environment for healing. Depending on the condition, debridement may be performed using surgical techniques or other specialised methods.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Healing After Wound Debridement</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        After the procedure, proper wound dressing, hygiene, and follow-up care play an important role in recovery. Removing damaged tissue helps improve healing and allows the wound to gradually repair itself.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Recovery time depends on the size, location, and severity of the wound along with the patient's overall health condition.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Advanced Wound Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides expert evaluation and surgical wound care with a focus on effective wound management, infection prevention, patient comfort, and improved healing outcomes.
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