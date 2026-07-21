@php($title = 'Varicose Vein Surgery | Dr. Aparna Venugopal')

@section('meta_desc')
Comprehensive and advanced treatments for varicose veins, offering minimally invasive procedures for lasting relief
and improved leg health.
@endsection

@extends('layouts.default')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Varicose Vein Treatment</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Varicose Veins</span>
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
                        <img src="{{ asset('resources/assets/images/services/varicose-veins.png') }}" alt="Varicose Vein Treatment" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Varicose Vein Treatment</h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            Varicose veins are enlarged, twisted veins that commonly appear on the legs due to improper blood flow and weakened vein walls. They may cause visible bulging veins along with symptoms such as pain, heaviness, swelling, or discomfort, especially after standing for long periods.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            Although varicose veins are often considered a cosmetic concern, they can sometimes lead to complications if left untreated. Early evaluation helps assess the severity of the condition and determine the most suitable treatment option for long-term relief.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">Signs That May Indicate Varicose Veins</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">You should consult a specialist if you experience:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Visible enlarged or twisted veins on the legs</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Leg pain, heaviness, or aching sensation</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Swelling around the ankles or lower legs</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Burning, itching, or discomfort near affected veins</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Skin colour changes or changes around the affected area</span>
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
                    <h2 class="about-simple-title mb-4 fs-3">Assessment & Treatment Options</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        A detailed evaluation is performed to understand the condition of the veins and blood flow. Your doctor may recommend a clinical examination and imaging tests such as a Doppler ultrasound to assess vein function.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Based on the severity of varicose veins, treatment options may include lifestyle changes, compression therapy, minimally invasive procedures, or surgery. The recommended approach depends on individual symptoms and vein condition.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Modern Approaches for Varicose Vein Management</h2>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Advanced treatments focus on closing or removing problematic veins while improving blood circulation through healthy veins. Minimally invasive techniques may offer benefits such as smaller incisions, reduced discomfort, and quicker recovery compared to traditional surgical methods.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Recovery After Varicose Vein Treatment</h2>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Recovery varies depending on the type of treatment performed. Most patients can gradually resume daily activities with proper care and follow-up guidance. Maintaining healthy habits and following medical advice can help support long-term vein health.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Expert Varicose Vein Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised evaluation and treatment for varicose veins, focusing on accurate diagnosis, advanced surgical care, patient comfort, and improved treatment outcomes.
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
