@php($title = 'Hernia Repair Surgery | Dr. Aparna Venugopal')

@section('meta_desc')
Hernia repair surgery is a safe and effective procedure used to push the bulge back into place and strengthen the
abdominal wall.
@endsection

@extends('layouts.default')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">Hernia Repair Surgery</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}" class="fs-5">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5 text-muted">Hernia Repair</span>
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
                        <img src="{{ asset('resources/assets/images/services/hernia.png') }}" alt="Hernia Repair Surgery" class="img-fluid rounded-4 w-100 shadow-sm">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="about-doctor-name mb-4">Hernia Repair </h2>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3 text-justify">
                            A hernia occurs when an internal organ or tissue pushes through a weakened area of the surrounding muscle or connective tissue, commonly causing a visible bulge or discomfort. Hernias may develop due to factors such as heavy lifting, ageing, previous surgeries, obesity, or increased pressure inside the abdomen.
                        </p>

                        <p class="text-muted fs-5 mb-4 text-justify">
                            While some hernias may remain painless initially, they can gradually increase in size and may cause complications if left untreated. Timely evaluation helps determine the severity of the condition and the most suitable treatment approach for safe and effective repair.
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
                        
                        <h2 class="about-simple-title mb-4 fs-3">Recognising the Signs of a Hernia</h2>
                        <p class="text-muted fs-5 mb-4 text-justify">You should consult a surgeon if you notice:</p>
                        
                        <ul class="list-unstyled text-muted fs-5 mb-0">
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">A visible bulge or swelling in the abdomen or groin area</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Pain or discomfort while lifting, coughing, or physical activity</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">A feeling of heaviness or pressure at the affected site</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Increase in the size of the lump over time</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start fs-5">
                                <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm mt-1 bg-primary-theme text-white list-icon-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="list-text-dark fw-medium fs-5">Difficulty performing daily activities due to discomfort</span>
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
                    <h2 class="about-simple-title mb-4 fs-3">Choosing the Right Hernia Repair Approach</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        Based on the type, size, and location of the hernia, your surgeon may recommend open or laparoscopic hernia repair. Open surgery involves repairing the hernia through a single incision, while laparoscopic surgery uses small incisions with advanced camera-assisted techniques for repair.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Laparoscopic hernia repair is a minimally invasive approach that may offer benefits such as smaller scars, reduced post-operative discomfort, and faster recovery in suitable patients.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Hernia Repair Procedure & Recovery</h2>
                    <p class="text-muted fs-5 mb-3 text-justify">
                        During hernia repair, the weakened area is strengthened to prevent the hernia from returning. In many cases, a surgical mesh may be used to provide additional support and improve repair strength.
                    </p>
                    <p class="text-muted fs-5 mb-5 text-justify">
                        Recovery depends on the type of procedure performed and individual healing. Most patients can gradually return to normal activities with proper post-operative care and follow-up guidance.
                    </p>

                    <h2 class="about-simple-title mb-4 fs-3">Advanced Hernia Care by Dr. Aparna Venugopal</h2>
                    <p class="text-muted fs-5 mb-0 text-justify">
                        <a href="{{ route('about') }}" class="text-primary-theme fw-bold text-decoration-none">Dr. Aparna Venugopal</a> provides personalised hernia evaluation and surgical treatment using modern techniques, including open and laparoscopic approaches, with a focus on patient safety, comfort, and smoother recovery.
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
