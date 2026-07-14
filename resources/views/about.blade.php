@extends('layouts.default')

@php
$title = 'About Dr. Aparna Venugopal | General & Laparoscopic Surgeon';
@endphp

@section('meta_desc', 'About Dr. Aparna Venugopal, General and Laparoscopic Surgeon with expertise in minimally invasive surgery, emergency care and surgical patient management.')

@section('content')

<main class="about-simple">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">

                <h1 class="about-simple-title display-3 mb-2">About Doctor</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="mx-2 fs-5">/</span>
                    <span class="fs-5">About</span>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section about-main-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5 order-lg-2 mb-5 mb-lg-0">
                    <div class="about-doctor-square-wrapper">
                        <!-- Offset double border design -->
                        <div class="about-doctor-border-1"></div>
                        <div class="about-doctor-border-2"></div>

                        <!-- Image -->
                        <div class="about-doctor-img-container">
                            <img src="{{ asset('resources/assets/images/doctor/dr-aparna-venugopal-about.png') }}" alt="Dr. Aparna Venugopal">
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 order-lg-1">
                    <!-- <span class="simple-kicker mb-3 d-block text-uppercase">About the Doctor</span> -->
                    <h2 class="about-doctor-name">Dr. Aparna Venugopal</h2>
                    <div class="mb-4">
                        <div class="about-doctor-designation">
                            General Surgeon <span class="divider">|</span> Laparoscopic Surgeon
                        </div>

                        <div class="degree-card">
                            <div class="degree-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="degree-text">
                                <h5>MBBS, MS, FIAGES</h5>
                            </div>
                        </div>
                    </div>

                    <div class="doctor-description pe-lg-3">
                        <p class="text-muted fs-5 mb-3" style="text-align: justify;">Dr. Aparna Venugopal is a skilled General and Laparoscopic Surgeon with over 5 years of experience in General Surgery. She focuses on safe, evidence-based and compassionate surgical care.</p>
                        <p class="text-muted fs-5 mb-3" style="text-align: justify;">Her work includes general surgical conditions, emergency surgeries, trauma care and minimally invasive laparoscopic procedures. She believes in personalized treatment planning, patient comfort and faster recovery.</p>
                        <p class="text-muted fs-5 mb-4" style="text-align: justify;">With a strong interest in medical education and continuous learning, she stays updated with modern surgical advancements to deliver high-quality patient care.</p>

                        <div class="mt-4">
                            <a href="{{ route('contact') }}" class="btn-primary-theme  ">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section education-area">
        <div class="container">
            <div class="text-center mb-5">
                <!-- <span class="simple-kicker mb-3">Educational Foundation</span> -->
                <h2 class="about-simple-title">Education &amp; Qualifications</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="edu-horizontal-card h-100">
                        <div class="edu-year-badge">2010 - 2016</div>
                        <h4 class="edu-degree-title">MBBS</h4>
                        <p class="edu-inst-text text-muted fs-5">Amrita Institute of Medical Sciences, Kochi, Kerala</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="edu-horizontal-card h-100">
                        <div class="edu-year-badge">2018 - 2021</div>
                        <h4 class="edu-degree-title">MS - General Surgery</h4>
                        <p class="edu-inst-text text-muted fs-5">SRM Medical College &amp; Research Centre, Chennai</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="edu-horizontal-card h-100">
                        <div class="edu-year-badge">2021</div>
                        <h4 class="edu-degree-title">FIAGES</h4>
                        <p class="edu-inst-text text-muted fs-5">Advanced training in laparoscopic surgical techniques.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="edu-horizontal-card h-100">
                        <div class="edu-year-badge">2024</div>
                        <h4 class="edu-degree-title">BCME</h4>
                        <p class="edu-inst-text text-muted fs-5">Basic Course in Medical Education, NMC.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <!-- <span class="simple-kicker mb-3">Professional Portfolio</span> -->
                <h2 class="about-simple-title">Professional Experience</h2>
            </div>

            <div class="experience-list">
                <div class="experience-item">
                    <span class="year-tag">April 2024 - December 2025</span>
                    <h3>Assistant Professor</h3>
                    <p class="fw-bold text-muted fs-5 mb-1">SRM Medical College &amp; Research Centre</p>
                    <ul class="text-muted fs-5">
                        <li class="text-muted fs-5">Teaching medical students and managing complex surgical cases.</li>
                        <li class="text-muted fs-5">Providing advanced laparoscopic surgical care and clinical research support.</li>
                    </ul>
                </div>

                <div class="experience-item">
                    <span class="year-tag">December 2023 - March 2024</span>
                    <h3>Senior Resident</h3>
                    <p class="fw-bold text-muted fs-5 mb-1">SRM Medical College &amp; Research Centre</p>
                    <ul class="text-muted fs-5">
                        <li class="text-muted fs-5">Managed elective and emergency surgical cases.</li>
                        <li class="text-muted fs-5">Assisted and performed advanced laparoscopic procedures.</li>
                    </ul>
                </div>

                <div class="experience-item">
                    <span class="year-tag">December 2022 - December 2023</span>
                    <h3>Senior Resident</h3>
                    <p class="fw-bold text-muted fs-5 mb-1">Adesh Institute of Medical Sciences</p>
                    <ul class="text-muted fs-5">
                        <li class="text-muted fs-5">Handled outpatient, inpatient and emergency general surgical care.</li>
                        <li class="text-muted fs-5">Assisted in complex gastrointestinal and laparoscopic surgeries.</li>
                    </ul>
                </div>

                <div class="experience-item mb-0">
                    <span class="year-tag">August 2021 - March 2022</span>
                    <h3>Assistant Professor</h3>
                    <p class="fw-bold text-muted fs-5 mb-1">Travancore Medical College</p>
                    <ul class="text-muted fs-5">
                        <li class="text-muted fs-5">Trained students and junior residents through clinical teaching.</li>
                        <li class="text-muted fs-5">Supervised patient care and surgical procedures.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section py-5" style="background-color: var(--accent);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="about-simple-title">Professional Achievements &amp; Experience</h2>
            </div>

            <ul class="nav nav-pills nav-justified mb-4 gap-3 achievements-tabs" id="achievementsTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active fw-bold fs-5 px-4 py-3 rounded shadow-sm" id="work-tab" data-bs-toggle="pill" data-bs-target="#work-content" type="button" role="tab" aria-controls="work-content" aria-selected="true">Work experience</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold fs-5 px-4 py-3 rounded shadow-sm" id="paper-tab" data-bs-toggle="pill" data-bs-target="#paper-content" type="button" role="tab" aria-controls="paper-content" aria-selected="false">Paper presentations</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold fs-5 px-4 py-3 rounded shadow-sm" id="conferences-tab" data-bs-toggle="pill" data-bs-target="#conferences-content" type="button" role="tab" aria-controls="conferences-content" aria-selected="false">Conferences</button>
                </li>
            </ul>

            <div class="tab-content bg-white p-4 p-md-5 rounded shadow-sm" id="achievementsTabContent">
                <div class="tab-pane fade show active" id="work-content" role="tabpanel" aria-labelledby="work-tab">
                    <ul class="list-unstyled mb-0" style="line-height: 1.8;">
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-check mt-1 me-3" style="color: var(--primary);"></i><span>Experienced in all basic open cases with precision and adherence to best practices</span></li>
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-check mt-1 me-3" style="color: var(--primary);"></i><span>Experienced in performing laparoscopic cases including lap appendicectomy and lap cholecystectomy under supervision</span></li>
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-check mt-1 me-3" style="color: var(--primary);"></i><span>Experienced in assisting laparoscopic hernia repairs including TEP, TAPP &amp; IPOM</span></li>
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-check mt-1 me-3" style="color: var(--primary);"></i><span>Experienced in Emergency surgery and trauma cases with extensive hands on experience</span></li>
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-check mt-1 me-3" style="color: var(--primary);"></i><span>Experienced in accurate pre operative assessment and post operative follow up care</span></li>
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-check mt-1 me-3" style="color: var(--primary);"></i><span>Collaborated with interdisciplinary teams to ensure comprehensive patient care</span></li>
                        <li class="mb-0 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-check mt-1 me-3" style="color: var(--primary);"></i><span>Trained and supervised medical students, residents and fellow surgeons</span></li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="paper-content" role="tabpanel" aria-labelledby="paper-tab">
                    <ul class="list-unstyled mb-0" style="line-height: 1.8;">
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-file-medical mt-1 me-3" style="color: var(--primary);"></i><span><strong>Case of pilomatrix carcinoma</strong> &ndash; ASICON 2019, Bhubaneshwar</span></li>
                        <li class="mb-3 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-file-medical mt-1 me-3" style="color: var(--primary);"></i><span><strong>Case of right hemicolectomy with hepatic metastatectomy</strong> &ndash; TS ASICON 2019</span></li>
                        <li class="mb-0 fs-5 text-muted d-flex align-items-start"><i class="fa-solid fa-file-medical mt-1 me-3" style="color: var(--primary);"></i><span><strong>A Study on utility of a predictive score in the pre-operative prediction of difficult Laparoscopic cholecystectomy</strong> - ASICON 2020 (Virtual)- 80th Annual conference of ASI.</span></li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="conferences-content" role="tabpanel" aria-labelledby="conferences-tab">
                    <ol class="fs-5 text-muted mb-0 ps-3" style="line-height: 1.8;">
                        <li class="mb-3 fs-5 text-muted">TN ASICON 2019, 43rd Annual Conference at Coutrallam, Tamil nadu.</li>
                        <li class="mb-3 fs-5 text-muted">TS ASICON 2019, 5th Annual Conference at Warangal, Telangana.</li>
                        <li class="mb-3 fs-5 text-muted">TN ASICON 2019, 79th Annual Conference at Bhubaneshwar, Orissa.</li>
                        <li class="mb-3 fs-5 text-muted">Workshop on Research Methodology in SRM Medical College and Research Centre, Chennai.</li>
                        <li class="mb-3 fs-5 text-muted">ASICON 2020 (VIRTUAL)- 80th Annual Conference of ASI.</li>
                        <li class="mb-3 fs-5 text-muted">SURGERY UPDATE 2020, Maulana Azad Medical College, New Delhi.</li>
                        <li class="mb-3 fs-5 text-muted">15th Annual International Conference of Association of Minimal Access Surgeons of India 2020</li>
                        <li class="mb-3 fs-5 text-muted">Bioethics in health sciences- BIOETHICON 2019, SRM Medical College Hospital and Research Centre</li>
                        <li class="mb-3 fs-5 text-muted">GROIN21(ATOZ OF K40.90) Single theme meeting and Live Workshop on groin hernia, Conducted by AWRSC &amp; St Isabel's hospital, Chennai Jul 2021</li>
                        <li class="mb-0 fs-5 text-muted">FIAGES Fellowship course- Sri Ramachandra Medical College Chennai- Sep 2021</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Memberships Section -->
    <section class="simple-section bg-white py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="about-simple-title">Memberships</h2>
            </div>
            
            <div class="row justify-content-center g-4">
                <div class="col-lg-6">
                    <div class="membership-ribbon-container h-100 mb-0">
                        <div class="membership-ribbon-badge">
                            <img src="{{ asset('resources/assets/images/icons-white/asi.png') }}" alt="ASI Logo">
                        </div>
                        <div class="membership-ribbon-content h-100">
                            <h4 class="font-heading">Association of Surgeons of India (ASI)</h4>
                            <p class="fw-bold">Life Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="membership-ribbon-container h-100 mb-0">
                        <div class="membership-ribbon-badge">
                            <img src="{{ asset('resources/assets/images/icons-white/iages.png') }}" alt="IAGES Logo">
                        </div>
                        <div class="membership-ribbon-content h-100">
                            <h4 class="font-heading">Indian Association of Gastrointestinal Endo Surgeons (IAGES)</h4>
                            <p class="fw-bold">Life Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section education-area">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="about-simple-title">Why Choose Dr. Aparna?</h2>
            </div>

            <div class="clinical-note shadow-sm">
                <ul class="text-muted fs-5" style="columns: 1;">
                    <li class="mb-2 text-muted fs-5">Proficiency in basic open surgeries with strict adherence to best practices.</li>
                    <li class="mb-2 text-muted fs-5">Laparoscopic procedures including appendicectomy and cholecystectomy.</li>
                    <li class="mb-2 text-muted fs-5">Advanced laparoscopic hernia repairs (TEP, TAPP &amp; IPOM).</li>
                    <li class="mb-2 text-muted fs-5">Extensive hands-on experience in emergency and trauma surgeries.</li>
                    <li class="mb-2 text-muted fs-5">Comprehensive pre-operative assessment and post-operative care.</li>
                    <li class="mb-2 text-muted fs-5">Collaborative approach with interdisciplinary healthcare teams.</li>
                    <li class="mb-2 text-muted fs-5">Mentorship and training of medical students and surgical residents.</li>
                </ul>
            </div>
        </div>
    </section>

</main>

@endsection