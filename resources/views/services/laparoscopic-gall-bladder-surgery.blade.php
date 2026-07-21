@php($title = 'Laparoscopic Gall Bladder Surgery | Dr. Aparna Venugopal')

@section('meta_desc')
Laparoscopic gall bladder surgery (cholecystectomy) is a minimally invasive procedure used to remove a diseased or
inflamed gallbladder, providing quick recovery.
@endsection

@extends('layouts.default')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Laparoscopic Gall Bladder Surgery</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Gall Bladder Surgery</span>
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
                        <img src="{{ asset('resources/assets/images/services/laparoscopic-gall-bladder-surgery.png') }}" alt="Laparoscopic Gall Bladder Surgery" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Laparoscopic Gall Bladder Surgery</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            The gall bladder is a small organ that stores bile, which helps in digestion. Problems such as gallstones, repeated gall bladder inflammation, or infections can affect its normal function and may cause symptoms like abdominal pain, nausea, and digestive discomfort.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            When gall bladder problems become frequent or severe, surgical removal of the gall bladder may be recommended. Laparoscopic Gall Bladder Surgery (Laparoscopic Cholecystectomy) is an advanced minimally invasive procedure that allows removal of the gall bladder through small abdominal incisions, helping patients experience smoother recovery.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">When Is Gall Bladder Surgery Recommended?</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">Surgical treatment may be advised if you experience:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Repeated episodes of abdominal pain, especially after meals</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Gallstones causing discomfort or complications</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Nausea, vomiting, or indigestion related to gall bladder issues</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Inflammation or infection of the gall bladder</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Blockage of bile flow due to stones</span>
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
                    <h2 class="about-simple-title mb-4 fs-3">Evaluation Before Gall Bladder Removal</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        Before surgery, a detailed assessment is performed to understand the condition of the gall bladder. Your doctor may recommend imaging tests such as ultrasound and other investigations to identify gallstones, inflammation, or related complications.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Based on the findings, the most suitable treatment plan is decided to ensure safe and effective care.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">How Is Laparoscopic Gall Bladder Surgery Performed?</h2>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        During laparoscopic cholecystectomy, the surgeon uses a small camera and specialised instruments inserted through tiny abdominal cuts to remove the gall bladder. This minimally invasive approach helps reduce tissue damage and supports faster healing.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Recovery After Gall Bladder Surgery</h2>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Most patients experience less pain, smaller scars, and quicker recovery compared to traditional open surgery. With proper post-operative care, many patients can gradually return to their normal routine within a short recovery period.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Advanced Gall Bladder Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised laparoscopic surgical care for gall bladder conditions using modern techniques, focusing on patient safety, comfort, and improved recovery outcomes.
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
