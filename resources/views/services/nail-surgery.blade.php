@extends('layouts.default')

@php
$title = 'Nail Surgeries | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Expert nail surgeries for ingrown toenails and fungal infections, providing permanent relief with quick, comfortable outpatient procedures.')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Nail Surgeries</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Nail Surgeries</span>
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
                        <img src="{{ asset('resources/assets/images/services/nail-surgery.png') }}" alt="Nail Surgeries" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Nail Surgeries</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            Nail problems can occur due to various reasons, including injuries, infections, ingrown nails, repeated trauma, or abnormal nail growth. These conditions may cause pain, swelling, redness, and difficulty in daily activities such as walking or wearing footwear.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            While some nail-related concerns can be managed with medicines and local care, certain conditions may require surgical treatment for long-term relief. Proper evaluation helps identify the underlying issue and determine the most suitable procedure for healthy nail recovery.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">Common Nail Conditions Requiring Surgical Treatment</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">Nail surgery may be recommended for conditions such as:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Painful ingrown toenails</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Repeated nail infections or inflammation</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Damaged or injured nails</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Abnormal nail growth causing discomfort</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Persistent swelling or pain around the nail area</span>
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
                    <h2 class="about-simple-title mb-4 fs-3">Evaluation & Surgical Management</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        A detailed examination of the affected nail and surrounding tissue helps determine the cause and severity of the problem. Depending on the condition, treatment may involve partial or complete nail removal, correction of the nail edge, or removal of damaged tissue.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        The procedure is performed carefully to relieve symptoms, prevent recurrence, and support proper healing of the nail area.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Recovery After Nail Surgery</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        Nail surgeries are generally safe procedures with minimal discomfort. Most patients can return to routine activities after recovery with proper wound care and follow-up instructions.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Following medical advice helps ensure smooth healing and reduces the chances of future nail problems.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Specialised Nail Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised surgical treatment for nail-related conditions with a focus on accurate diagnosis, safe procedures, patient comfort, and effective recovery outcomes.
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