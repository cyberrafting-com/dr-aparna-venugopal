@php($title = 'Laparoscopic Appendix Surgery | Dr. Aparna Venugopal')

@section('meta_desc')
Laparoscopic Appendix Surgery is an advanced minimally invasive procedure used to remove an inflamed or infected
appendix through small incisions.
@endsection

@extends('layouts.default')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Laparoscopic Appendix Surgery</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Appendix Surgery</span>
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
                        <img src="{{ asset('resources/assets/images/services/laparoscopic-appendix.png') }}" alt="Laparoscopic Appendix Surgery" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Laparoscopic Appendix Surgery</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">The appendix is a small pouch attached to the large intestine. When it becomes inflamed or infected, it can cause a condition called appendicitis, which may require surgical removal of the appendix. If left untreated, appendicitis can sometimes lead to complications such as appendix rupture and infection spread inside the abdomen.</p>

                        <p class="text-muted fs-5 mb-4 text-justify">Laparoscopic Appendix Surgery (Laparoscopic Appendectomy) is a minimally invasive procedure used to remove the infected appendix through small abdominal incisions. Compared to traditional open surgery, this advanced technique offers smaller scars, reduced pain, faster recovery, and a shorter hospital stay.</p>
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

                        <h2 class="about-simple-title mb-4 fs-3">When Is Appendix Surgery Needed?</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">Appendix surgery may be recommended when patients experience symptoms such as:</p>

                        <ul class="list-unstyled text-muted fs-5 mb-4">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Severe abdominal pain, especially in the lower right abdomen</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Fever and chills</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Nausea or vomiting</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Loss of appetite</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Abdominal tenderness or swelling</span>
                            </li>
                        </ul>
                        <p class="text-muted fs-5 mb-0 text-justify">Early diagnosis and timely treatment can help prevent complications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="about-simple-title mb-4 fs-3">How Is Laparoscopic Appendix Surgery Performed?</h2>
                    <p class="text-muted fs-5 mb-5 text-justify">The procedure is performed under anesthesia using a laparoscope, a small camera that allows the surgeon to view and remove the appendix through tiny incisions. The surgery is performed with precision while minimising damage to surrounding tissues.</p>

                    <h2 class="about-simple-title mb-4 fs-3">Recovery After Surgery</h2>
                    <p class="text-muted fs-5 mb-4 text-justify">Most patients experience a quicker recovery after laparoscopic appendix surgery. Walking is encouraged soon after the procedure, and many patients can gradually return to normal activities within a few weeks, depending on their recovery.</p>

                    <p class="text-muted fs-5 mb-0 text-justify"><a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised laparoscopic surgical care using modern techniques to ensure safe treatment, minimal discomfort, and better recovery outcomes for patients.</p>
                    <div class="mt-4">
                        <a href="{{ route('contact') }}" class="btn-primary-theme btn-text-sm">Book Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
