@extends('layouts.default')

@php
$title = 'Lymph Node Biopsy | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Accurate and minimally invasive lymph node biopsy procedures for precise diagnosis of infections, immune disorders, and cancers.')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Lymph Node Biopsy</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Lymph Node Biopsy</span>
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
                        <img src="{{ asset('resources/assets/images/services/lymph-node-biopsy.png') }}" alt="Lymph Node Biopsy" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Lymph Node Biopsy</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            Lymph nodes are small structures of the immune system that help the body fight infections and filter harmful substances. Sometimes, changes in the size, shape, or behaviour of a lymph node may require further evaluation to identify the underlying cause.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            A lymph node biopsy is a diagnostic procedure performed to examine lymph node tissue under a microscope. It helps doctors understand whether the enlargement is due to infections, inflammation, or other medical conditions and supports accurate treatment planning.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">When Is a Lymph Node Biopsy Recommended?</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">A doctor may advise a biopsy if you notice:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Persistent swelling or enlargement of lymph nodes</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Lymph nodes that continue to grow in size</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Unexplained lumps in the neck, armpit, or groin area</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Associated symptoms such as fever, night sweats, or unexplained weight loss</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Abnormal findings on imaging tests</span>
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
                    <h2 class="about-simple-title mb-4 fs-3">Understanding the Biopsy Procedure</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        During a lymph node biopsy, a small sample of tissue is carefully removed from the affected lymph node and sent for laboratory analysis. The procedure may involve removing part or the entire lymph node, depending on the clinical requirement.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        The biopsy results help determine the nature of the lymph node changes and guide further treatment decisions.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Recovery After Lymph Node Biopsy</h2>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Lymph node biopsy is generally a safe procedure performed with appropriate precautions. Most patients experience minimal discomfort and can return to routine activities after recovery, depending on the type of biopsy performed.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Expert Surgical Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides careful evaluation and surgical management for conditions requiring lymph node biopsy, focusing on accurate diagnosis, patient safety, comfort, and personalised treatment planning.
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