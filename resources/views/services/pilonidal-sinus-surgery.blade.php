@extends('layouts.default')

@php
$title = 'Pilonidal Sinus Surgery | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Pilonidal sinus surgery is a safe and effective treatment to remove painful cysts at the tailbone and prevent them from recurring.')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Pilonidal Sinus Surgery</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Pilonidal Sinus</span>
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
                        <img src="{{ asset('resources/assets/images/services/pilonidal-sinus-surgery.png') }}" alt="Pilonidal Sinus Surgery" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Pilonidal Sinus Surgery</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            Pilonidal sinus is a condition where a small tunnel or cavity develops in the skin near the tailbone, usually due to trapped hair, skin debris, or repeated friction. It may cause pain, swelling, redness, and discomfort while sitting or performing daily activities.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            In some cases, pilonidal sinus can become infected and lead to recurrent abscess formation or discharge. Timely evaluation and appropriate treatment help manage the condition effectively and reduce the chances of repeated problems.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">Signs That May Require Medical Evaluation</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">You should consult a surgeon if you experience:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Painful swelling near the tailbone area</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Pus or blood discharge from the affected area</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Redness, tenderness, or skin irritation</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Repeated episodes of infection or abscess</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Discomfort while sitting for longer periods</span>
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
                        A clinical examination helps assess the extent of the pilonidal sinus and determine the most suitable treatment option. Depending on the severity, treatment may include wound care, drainage of infection, or surgical removal of the sinus tract.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Pilonidal sinus surgery aims to remove the affected tissue and sinus tract to prevent recurrence and promote proper healing.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Procedure & Recovery After Surgery</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        The surgical approach is planned based on the size and complexity of the sinus. Modern techniques focus on effective removal of the problem area while supporting faster healing and reduced discomfort.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Recovery depends on the procedure performed and individual healing. With proper wound care and follow-up, most patients can gradually return to their normal activities.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Specialised Pilonidal Sinus Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised evaluation and surgical treatment for pilonidal sinus with a focus on safe procedures, patient comfort, effective management, and better recovery outcomes.
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