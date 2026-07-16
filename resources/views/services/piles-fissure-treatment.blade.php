@extends('layouts.default')

@php
$title = 'Piles, Fissure & Fistula Treatment | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Advanced and minimally invasive surgical treatments for piles, fissures, and fistulas providing fast relief from pain and discomfort.')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Piles, Fissure & Fistula Treatment</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Piles & Fissure</span>
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
                        <img src="{{ asset('resources/assets/images/services/piles-fissure.png') }}" alt="Piles, Fissure & Fistula Treatment" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Piles, Fissure & Fistula Treatment</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            Piles, fissures, and fistulas are common conditions affecting the anal region and can cause discomfort, pain, bleeding, or difficulty during bowel movements. These conditions may occur due to factors such as constipation, straining during bowel movements, infections, or changes in the surrounding tissues.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            Although symptoms may seem minor initially, delaying treatment can lead to persistent discomfort and affect daily activities. Proper evaluation helps identify the exact condition and allows your surgeon to recommend the most suitable treatment option.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">Understanding Common Anal Conditions</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">You should consult a surgeon if you experience:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Bleeding during or after bowel movements</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Pain or burning sensation while passing stools</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Swelling or lumps around the anal area</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Persistent itching or irritation</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Discharge or repeated infection near the anal opening</span>
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
                    <h2 class="about-simple-title mb-4 fs-3">Diagnosis & Treatment Approach</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        A detailed examination helps determine whether the condition is piles (haemorrhoids), anal fissure, or fistula. Based on the severity and symptoms, treatment may include lifestyle modifications, medications, minimally invasive procedures, or surgery when required.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Advanced treatment options aim to relieve symptoms, treat the underlying cause, and reduce the chances of recurrence while ensuring patient comfort.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Surgical Management & Recovery</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        When surgery is recommended, the procedure is performed to provide long-term relief by addressing the affected area. Modern surgical techniques help minimise discomfort and support faster recovery.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Recovery depends on the type of procedure performed and individual healing. With proper post-treatment care and follow-up, most patients can gradually return to their normal routine.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Comprehensive Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised evaluation and treatment for piles, fissure, and fistula conditions with a focus on accurate diagnosis, safe surgical care, patient comfort, and better recovery outcomes.
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