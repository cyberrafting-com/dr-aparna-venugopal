@extends('layouts.default')

@php
$title = 'Breast Lump Evaluation & Surgery | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Breast Lump Evaluation & Surgery helps diagnose and treat breast lumps with personalised surgical care focused on safety, comfort, and better outcomes.')

@section('content')

<main class="about-simple">

    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Breast Lump Evaluation & Surgery</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Breast Lump Evaluation & Surgery</span>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section about-main-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-4 mb-lg-0">
                    <div class="service-image-wrapper position-relative z-1">
                        <div class="position-absolute rounded-4 service-image-bg"></div>

                        <img src="{{ asset('resources/assets/images/services/breast-lump.png') }}" 
                        alt="Breast Lump Evaluation & Surgery" 
                        class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Breast Lump Evaluation & Surgery</h2>

                    <div class="doctor-description pe-lg-3">

                        <p class="text-muted fs-5 mb-3 text-justify">
                            A breast lump can develop due to various reasons, including benign conditions such as cysts or fibroadenomas, as well as conditions that may require further medical attention. Proper evaluation helps identify the cause of the lump and determine the most suitable treatment approach.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            Dr. Aparna Venugopal provides comprehensive breast lump evaluation and surgical care with a focus on accurate diagnosis, personalised treatment, and patient comfort.
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

                        <h2 class="about-simple-title mb-4 fs-3">Understanding Breast Lumps: When Do You Need Medical Advice?</h2>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            You should consider consulting a surgeon if you experience:
                        </p>

                        <ul class="list-unstyled text-muted fs-5 mb-4">

                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">A newly developed lump in the breast</span>
                            </li>

                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Increase or change in breast size or shape</span>
                            </li>

                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Persistent breast pain or tenderness</span>
                            </li>

                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Changes in the skin texture or appearance</span>
                            </li>

                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Nipple discharge or other unusual changes</span>
                            </li>

                        </ul>

                        <p class="text-muted fs-5 mb-0 text-justify">
                            Diagnosis Before Treatment

                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="simple-section py-5 bg-white">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <p class="text-muted fs-5 mb-5 text-justify">
                        A detailed evaluation is important to understand the nature of the breast lump. Your doctor may recommend a physical examination along with imaging tests such as breast ultrasound or mammography. In certain cases, a biopsy may be advised for accurate diagnosis.
                    </p>


                    <h2 class="about-simple-title mb-4 fs-3">Breast Lump Removal Procedure</h2>

                    <p class="text-muted fs-5 mb-5 text-justify">
                        When surgical removal is required, breast lump surgery (lumpectomy) is performed to remove the abnormal tissue while preserving the natural appearance of the breast. The treatment approach is planned based on the size, location, and type of lump.
                    </p>


                    <h2 class="about-simple-title mb-4 fs-3">Healing & Recovery After Breast Lump Surgery</h2>

                    <p class="text-muted fs-5 mb-4 text-justify">
                        Breast lump removal is generally a safe procedure with minimal discomfort. Most patients can gradually resume their daily activities after recovery, depending on the healing process and individual condition.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Expert Breast Surgical Care by Dr. Aparna Venugopal</h2>

                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised evaluation and surgical treatment for breast conditions, focusing on accurate diagnosis, patient comfort, safety, and better recovery outcomes.
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