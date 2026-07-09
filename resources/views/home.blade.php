@extends('layouts.default')

@php
$title = 'Dr. Aparna Venugopal | Expert General & Laparoscopic Surgeon';
@endphp
@section('meta_desc', 'Experience advanced minimally invasive surgical treatments, hernia repair, and specialized day care surgeries by Dr. Aparna Venugopal, a trusted general surgeon.')

@section('content')

<!-- 2. HERO SECTION -->
<div class="custom-hero-wrapper">
    <section class="custom-hero-card shadow-lg">

        <div class="swiper heroSwiper w-100 h-100">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide custom-hero-slide" style="background-image: url('{{ asset('resources/assets/images/slider/laparoscopic-banner.png') }}');">
                    <div class="custom-hero-overlay"></div>
                    <div class="custom-hero-content" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Prefer a Female Surgeon for Your Laparoscopic Procedure?</h1>
                        <p class="text-white fs-5 mb-5" style="opacity: 0.9;">Experience advanced minimally invasive surgery with personalized care, privacy, and expertise from Dr. Aparna Venugopal.</p>
                        <a href="{{ route('contact') }}" class="custom-hero-btn">
                            Schedule Your Appointment <i class="fa-solid fa-arrow-right-long text-white ms-1"></i>
                        </a>
                    </div>
                </div>
                <!-- Slide 2  -->
                <div class="swiper-slide custom-hero-slide" style="background-image: url('{{ asset('resources/assets/images/slider/piles-banner.png') }}');">
                    <div class="custom-hero-overlay"></div>
                    <div class="custom-hero-content" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Advanced Care for Piles, Fissure & Fistula</h1>
                        <p class="text-white fs-5 mb-5" style="opacity: 0.9;">Expert surgical treatments ensuring safe, comfortable, and lasting relief for all anorectal conditions.</p>
                        <a href="#" class="custom-hero-btn">
                            Book Surgical Consultation <i class="fa-solid fa-arrow-right-long text-white ms-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide custom-hero-slide" style="background-image: url('{{ asset('resources/assets/images/slider/breast-banner.png') }}');">
                    <div class="custom-hero-overlay"></div>
                    <div class="custom-hero-content" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Expert Breast Lump Evaluation & Surgical Care</h1>
                        <p class="text-white fs-5 mb-5" style="opacity: 0.9;">Comprehensive diagnosis and surgical management focusing on early detection and safe, effective treatment.</p>
                        <a href="#" class="custom-hero-btn">
                            Book Surgical Consultation <i class="fa-solid fa-arrow-right-long text-white ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination mb-2"></div>
            <!-- Invisible click areas for sliding -->
            <div class="swiper-button-next click-area-next"></div>
            <div class="swiper-button-prev click-area-prev"></div>
        </div>

    </section>
</div>

<!-- 3. ABOUT SECTION -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="about-img-wrapper position-relative mx-auto about-img-custom">
                    <!-- <div class="about-bg-shape"></div> -->
                    <div class="about-border-shape"></div>
                    <img src="{{ asset('resources/assets/images/dummy-dr.png') }}" alt="Dr. Aparna Venugopal" class="img-fluid position-relative z-1 shadow-sm about-img-custom" style="background-color:var(--accent)">
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5" data-aos="fade-up" data-aos-delay="100">
                <span class="section-subtitle text-uppercase letter-spacing-2 fw-bold mb-3 d-block text-primary-custom">About Doctor</span>
                <h2 class="section-title font-heading mb-2 text-dark display-5 fw-bold" data-aos="zoom-in-up" data-aos-duration="1000">Dr. Aparna Venugopal</h2>
                <p class="text-primary-theme fw-bold fs-5 mb-4">MBBS, MS (Gen Surgery), FIAGES</p>

                <p class="mb-3 text-muted fs-5">Dr. Aparna Venugopal is a highly trained General Surgeon with strong expertise in minimally invasive, laparoscopic, and emergency surgical care.</p>

                <p class="mb-5 text-muted fs-5">With extensive experience in reputed institutions, her clinical approach centers on accurate diagnosis, advanced surgical techniques, and safe post-operative recovery, ensuring the highest standard of patient-centered care.</p>

                <a href="#" class="btn-primary-theme px-5 py-3 rounded-0 text-uppercase fw-bold shadow-sm d-inline-block btn-text-sm">Know More</a>
            </div>
        </div>
    </div>
</section>

<!-- 4. SERVICES GRID SECTION -->
<section class="section-padding bg-light-theme">
    <div class="container">
        <div class="text-center  pb-3" data-aos="fade-up">
            <h2 class="section-title text-dark font-heading" data-aos="zoom-in-up" data-aos-duration="1000">Our Services</h2>
        </div>

        <div class="swiper servicesSwiper pb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <!-- Service 1 -->
                <div class="swiper-slide">
                    <a href="{{ route('services.breast-lump-evaluation-surgery') }}" class="service-carousel-card position-relative text-decoration-none d-block">
                        <img src="{{ asset('resources/assets/images/services/breast-lumps.png') }}" class="w-100 h-100 object-fit-cover" alt="Breast Lump Evaluation and Surgery">
                        <div class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </div>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading text-dark">Breast Lump Evaluation </h5>
                                <p class="text-muted fs-5 mb-0">Careful assessment, diagnosis and surgical treatment of breast lumps.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="swiper-slide">
                    <a href="{{ route('services.lipoma-sebaceous-cyst-removal') }}" class="service-carousel-card position-relative text-decoration-none d-block">
                        <img src="{{ asset('resources/assets/images/services/lipoma.png') }}" class="w-100 h-100 object-fit-cover" alt="Lipoma and Sebaceous Cyst Removal">
                        <div class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </div>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading text-dark">Lipoma &amp; Sebaceous Cyst Removal</h5>
                                <p class="text-muted fs-5 mb-0">Safe removal of benign skin lumps with attention to minimal scarring.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="swiper-slide">
                    <a href="{{ route('services.lymph-node-biopsy') }}" class="service-carousel-card position-relative text-decoration-none d-block">
                        <img src="{{ asset('resources/assets/images/services/lymph-node.png') }}" class="w-100 h-100 object-fit-cover" alt="Lymph Node Biopsy">
                        <div class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </div>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading text-dark">Lymph Node Biopsy</h5>
                                <p class="text-muted fs-5 mb-0">Precise tissue sampling to support accurate diagnosis and treatment planning.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="swiper-slide">
                    <a href="{{ route('services.nail-surgery') }}" class="service-carousel-card position-relative text-decoration-none d-block">
                        <img src="{{ asset('resources/assets/images/services/nail-infection.png') }}" class="w-100 h-100 object-fit-cover" alt="Nail Surgeries">
                        <div class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </div>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading text-dark">Nail Surgeries</h5>
                                <p class="text-muted fs-5 mb-0">Treatment for ingrown, infected or damaged nails with lasting relief.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service 5 -->
                <div class="swiper-slide">
                    <a href="{{ route('services.ear-lobule-repair') }}" class="service-carousel-card position-relative text-decoration-none d-block">
                        <img src="{{ asset('resources/assets/images/services/ear-lobe.png') }}" class="w-100 h-100 object-fit-cover" alt="Ear Lobule Repair">
                        <div class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </div>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading text-dark">Ear Lobule Repair</h5>
                                <p class="text-muted fs-5 mb-0">Precise repair of torn, split or stretched earlobes with minimal scarring.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service 6 -->
                <div class="swiper-slide">
                    <a href="{{ route('services.wound-debridement') }}" class="service-carousel-card position-relative text-decoration-none d-block">
                        <img src="{{ asset('resources/assets/images/services/wound.png') }}" class="w-100 h-100 object-fit-cover" alt="Wound Debridement">
                        <div class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </div>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading text-dark">Wound Debridement</h5>
                                <p class="text-muted fs-5 mb-0">Removal of unhealthy tissue to control infection and support wound healing.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service 7 -->
                <div class="swiper-slide">
                    <a href="{{ route('services.incision-and-drainage-of-abscesses') }}" class="service-carousel-card position-relative text-decoration-none d-block">
                        <img src="{{ asset('resources/assets/images/services/piles.png') }}" class="w-100 h-100 object-fit-cover" alt="Incision and Drainage of Abscesses">
                        <div class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </div>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading text-dark">Incision &amp; Drainage of Abscesses</h5>
                                <p class="text-muted fs-5 mb-0">Prompt drainage of infected collections to relieve pain and promote healing.</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Navigation -->
            <div class="d-flex justify-content-end gap-2 mt-4 pe-2">
                <div class="slider-nav-btn shadow-sm custom-services-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="slider-nav-btn shadow-sm custom-services-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 6. surgical PROCEDURES SECTION -->
<section class="section-padding laparoscopic-showcase position-relative overflow-hidden">
    <div class="laparoscopic-glow laparoscopic-glow-left" aria-hidden="true"></div>
    <div class="laparoscopic-glow laparoscopic-glow-right" aria-hidden="true"></div>

    <div class="container position-relative z-1">
        <div class="text-center laparoscopic-heading" data-aos="fade-up">
            <h2 class="section-title font-heading fw-bold display-5" data-aos="zoom-in-up" data-aos-duration="1000">Specialised Surgical Care</h2>
            <p class="fs-5 mt-3 mb-0">Safe, personalised treatment using open and minimally invasive techniques.</p>
        </div>

        <div class="row align-items-center">
            <!-- Left Side Items -->
            <div class="col-lg-4 laparoscopic-list laparoscopic-list-left">
                <div class="laparoscopic-procedure" data-aos="fade-right" data-aos-delay="100">
                    <div class="icon-box-lg">
                        <i class="fa-solid fa-stethoscope fs-3"></i>
                    </div>
                    <div>
                        <h5><a href="{{ route('services.hernia-repair') }}" class="text-dark no-underline">Hernia Repair</a></h5>
                        <p class="text-muted fs-5">Open and laparoscopic repair tailored to the type and severity of the hernia.</p>
                    </div>
                </div>

                <div class="laparoscopic-procedure" data-aos="fade-right" data-aos-delay="200">
                    <div class="icon-box-lg">
                        <i class="fa-solid fa-notes-medical fs-3"></i>
                    </div>
                    <div>
                        <h5><a href="{{ route('services.piles-fissure-treatment') }}" class="text-dark no-underline">Piles, Fissure &amp; Fistula Treatment</a></h5>
                        <p class="text-muted fs-5">Personalised surgical care to relieve pain, bleeding and discomfort.</p>
                    </div>
                </div>
            </div>

            <!-- Center Image -->
            <div class="col-lg-4 text-center laparoscopic-visual" data-aos="zoom-in" data-aos-delay="200">
                <div class="laparoscopic-image-wrap">
                    <img src="{{ asset('resources/assets/images/services/surgical-care.png') }}" alt="Laparoscopic surgery instruments and anatomy" loading="lazy">
                </div>
            </div>

            <!-- Right Side Items -->
            <div class="col-lg-4 laparoscopic-list laparoscopic-list-right">
                <div class="laparoscopic-procedure" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box-lg">
                        <i class="fa-solid fa-staff-snake fs-3"></i>
                    </div>
                    <div>
                        <h5><a href="{{ route('services.pilonidal-sinus-surgery') }}" class="text-dark no-underline">Pilonidal Sinus Surgery</a></h5>
                        <p class="text-muted fs-5">Effective removal of the sinus with careful wound care and recovery guidance.</p>
                    </div>
                </div>

                <div class="laparoscopic-procedure" data-aos="fade-left" data-aos-delay="200">
                    <div class="icon-box-lg">
                        <i class="fa-solid fa-disease fs-3"></i>
                    </div>
                    <div>
                        <h5><a href="{{ route('services.varicose-vein-surgery') }}" class="text-dark no-underline">Varicose Vein Surgery</a></h5>
                        <p class="text-muted fs-5">Surgical treatment to improve circulation and ease swelling, pain and heaviness.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. STATS COUNTER SECTION -->
<section class="section-padding bg-primary-theme stats-section">
    <div class="container text-center">
        <div class="row g-4">
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="0">
                <div class="d-flex justify-content-center align-items-baseline">
                    <div class="stat-number text-white" data-target="300">0</div>
                    <span class="text-white fs-3 fw-bold ms-1">+</span>
                </div>
                <div class="text-accent text-uppercase letter-spacing-1 small fw-bold"> Surgeries</div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-number text-white" data-target="12500">0</div>
                <div class="text-accent text-uppercase letter-spacing-1 small fw-bold">Happy Clients</div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-number text-white" data-target="35000">0</div>
                <div class="text-accent text-uppercase letter-spacing-1 small fw-bold">Treatments Done</div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-number text-white" data-target="99">0</div>
                <div class="text-accent text-uppercase letter-spacing-1 small fw-bold">Satisfaction %</div>
            </div>
        </div>
    </div>
</section>
<!-- 5. FEATURED TREATMENTS SECTION -->
<section class="section-padding position-relative overflow-hidden bg-light-custom">

    <!-- Background Decor -->
    <div class="position-absolute rounded-circle decor-circle-lg"></div>
    <div class="position-absolute decor-star-pos">
        <i class="fa-solid fa-star-of-life fs-3 decor-star-icon"></i>
    </div>

    <!-- Abstract dotted SVG curve pattern -->
    <div class="position-absolute w-100 h-100 top-0 start-0 pointer-events-none bg-pattern-dots"></div>

    <div class="container position-relative z-1">
        <div class="row align-items-center">

            <!-- Left Side Content -->
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5" data-aos="fade-right">

                <div class="d-flex align-items-center mb-3">
                    <span class="line-separator"></span>
                    <span class="text-uppercase letter-spacing-1 small text-dark-custom">Specialized Care</span>
                </div>

                <h2 class="display-4 font-heading fw-bold mb-4 text-primary-dark-custom" data-aos="zoom-in-up" data-aos-duration="1000">Laparoscopic Surgery</h2>

                <p class="text-muted mb-4 fs-5 lh-lg pe-lg-4">Advanced keyhole procedures performed through small incisions to support less pain, minimal scarring, shorter hospital stays and faster recovery.</p>

                <ul class="list-unstyled mb-5 fs-5 text-muted">
                    <li class="mb-3 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <span class="list-text-dark">Laparoscopic Appendix Surgery</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <span class="list-text-dark">Laparoscopic Gall Bladder Surgery</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <span class="list-text-dark">Laparoscopic Hernia Repair</span>
                    </li>
                </ul>

                <a href="#" class="btn-primary-theme rounded-0 px-5 py-3 text-uppercase fw-bold shadow-sm d-inline-block transition-all">Learn More</a>
            </div>

            <!-- Right Side Service Images -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="laparoscopy-image-grid mt-4 mt-lg-0">
                    <a href="{{ route('services.laparoscopic-appendix-surgery') }}" class="laparoscopy-image-card laparoscopy-image-card-main text-decoration-none">
                        <img src="{{ asset('resources/assets/images/services/appendix-surgery.png') }}" alt="Laparoscopic Appendix Surgery" loading="lazy">
                        <h5>Laparoscopic Appendix Surgery</h5>
                    </a>

                    <a href="{{ route('services.laparoscopic-gall-bladder-surgery') }}" class="laparoscopy-image-card text-decoration-none">
                        <img src="{{ asset('resources/assets/images/services/laparoscopic-gall-bladder.png') }}" alt="Laparoscopic Gall Bladder Surgery" loading="lazy">
                        <h5>Laparoscopic Gall Bladder Surgery</h5>
                    </a>

                    <a href="{{ route('services.hernia-repair') }}" class="laparoscopy-image-card text-decoration-none">
                        <img src="{{ asset('resources/assets/images/services/hernia-repair.png') }}" alt="Laparoscopic Hernia Repair" loading="lazy">
                        <h5>Laparoscopic Hernia Repair</h5>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- 7. TESTIMONIAL SECTION -->
<section class="section-padding bg-secondary-theme">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <!-- <span class="section-subtitle">Testimonials</span> -->
            <h2 class="section-title" data-aos="zoom-in-up" data-aos-duration="1000">What Our Patients Say</h2>
        </div>

        <div class="swiper testimonial-swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="fst-italic text-muted fs-5 mb-4">"The care and attention I received were unmatched. The team is incredibly professional, and the results of my treatment exceeded all expectations."</p>
                        <div class="d-flex align-items-center mt-auto">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Review" class="me-3 object-fit-contain" width="40" height="40" referrerpolicy="no-referrer">
                            <div>
                                <h5 class="mb-0 fs-6">Sarah Jenkins</h5>
                                <!-- <span class="text-muted small">Skin Rejuvenation</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="fst-italic text-muted fs-5 mb-4">"From the moment you walk in, you feel the luxury. The doctors took their time to explain everything. I'm so happy with my recovery!"</p>
                        <div class="d-flex align-items-center mt-auto">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Review" class="me-3 object-fit-contain" width="40" height="40" referrerpolicy="no-referrer">
                            <div>
                                <h5 class="mb-0 fs-6">Emily Roberts</h5>
                                <!-- <span class="text-muted small">Botox Treatment</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="fst-italic text-muted fs-5 mb-4">"A completely transformative experience. The clinic is pristine, and the staff made sure I was comfortable the entire time. Highly recommend."</p>
                        <div class="d-flex align-items-center mt-auto">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Review" class="me-3 object-fit-contain" width="40" height="40" referrerpolicy="no-referrer">
                            <div>
                                <h5 class="mb-0 fs-6">Jessica Moore</h5>
                                <!-- <span class="text-muted small">Laser Hair Removal</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="fst-italic text-muted fs-5 mb-4">"Dr. Aparna is an excellent surgeon. The procedure was smooth and the post-operative care was phenomenal. I felt completely safe and well cared for."</p>
                        <div class="d-flex align-items-center mt-auto">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Review" class="me-3 object-fit-contain" width="40" height="40" referrerpolicy="no-referrer">
                            <div>
                                <h5 class="mb-0 fs-6">Michael Brown</h5>
                                <!-- <span class="text-muted small">Hernia Surgery</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="fst-italic text-muted fs-5 mb-4">"Very professional and empathetic approach. Everything was explained in detail before the surgery, which put my mind at ease. Fantastic experience overall."</p>
                        <div class="d-flex align-items-center mt-auto">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Review" class="me-3 object-fit-contain" width="40" height="40" referrerpolicy="no-referrer">
                            <div>
                                <h5 class="mb-0 fs-6">David Smith</h5>
                                <!-- <span class="text-muted small">General Surgery</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="d-flex justify-content-end gap-2 mt-4 pe-2">
                <div class="slider-nav-btn shadow-sm custom-testimonial-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="slider-nav-btn shadow-sm custom-testimonial-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 9. GALLERY SECTION -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <!-- <span class="section-subtitle">Our Work</span> -->
            <h2 class="section-title mb-0" data-aos="zoom-in-up" data-aos-duration="1000">Gallery</h2>
        </div>

        <div class="row g-4">
            <!-- Gallery Item 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="gallery-page-item overflow-hidden rounded-3 shadow-sm position-relative">
                    <a data-fslightbox="gallery" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
                        <img src="{{ asset('resources/assets/images/gallery-d.png') }}" class="img-fluid w-100 gallery-page-img" alt="Gallery Image 1">
                        <div class="gallery-page-overlay position-absolute top-0 start-0 w-100 h-100">
                            <div class="gallery-page-icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-page-item overflow-hidden rounded-3 shadow-sm position-relative">
                    <a data-fslightbox="gallery" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
                        <img src="{{ asset('resources/assets/images/gallery-d.png') }}" class="img-fluid w-100 gallery-page-img" alt="Gallery Image 2">
                        <div class="gallery-page-overlay position-absolute top-0 start-0 w-100 h-100">
                            <div class="gallery-page-icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-page-item overflow-hidden rounded-3 shadow-sm position-relative">
                    <a data-fslightbox="gallery" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
                        <img src="{{ asset('resources/assets/images/gallery-d.png') }}" class="img-fluid w-100 gallery-page-img" alt="Gallery Image 3">
                        <div class="gallery-page-overlay position-absolute top-0 start-0 w-100 h-100">
                            <div class="gallery-page-icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include fsLightbox for Gallery Zoom -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.1/index.min.js"></script>

<!-- 10. DOCTOR PROFILE / CTA SECTION -->
<!-- 10. DOCTOR PROFILE / CTA SECTION -->
<section class="section-padding position-relative overflow-hidden" style="background-color: var(--accent);">
    <!-- Decorative background elements -->
    <div class="position-absolute top-0 end-0 opacity-25" style="width: 300px; height: 300px; background: radial-gradient(circle, var(--primary) 0%, transparent 70%); transform: translate(30%, -30%);"></div>
    <div class="position-absolute bottom-0 start-0 opacity-25" style="width: 400px; height: 400px; background: radial-gradient(circle, var(--primary) 0%, transparent 70%); transform: translate(-30%, 30%);"></div>

    <div class="container position-relative z-1">
        <!-- Title Row -->
        <div class="row mb-5 pb-2">
            <div class="col-12 text-center" data-aos="fade-up">
                <span class="d-inline-block text-white fw-bold mb-3 px-3 py-1 rounded-pill text-uppercase shadow-sm" style="background-color: var(--primary); letter-spacing: 1.5px; font-size: 0.85rem;">Expert Care for Women in Pune</span>
                <h2 class="display-5 font-heading text-dark fw-bold lh-sm mb-0">Compassionate & Advanced Surgical Care</h2>
            </div>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="position-relative">
                    <!-- Image wrapper with accent border/design -->
                    <div class="position-absolute w-100 h-100 rounded-4" style="border: 3px solid var(--primary); opacity: 0.15; top: 15px; left: -15px; z-index: 0;"></div>
                    <div class="position-absolute w-100 h-100 rounded-4" style="background-color: var(--primary); top: -15px; right: -15px; opacity: 0.05; z-index: 0;"></div>
                    <img src="{{ asset('resources/assets/images/slider/cta.png') }}" alt="Compassionate Patient Care" class="img-fluid rounded-4 shadow-lg position-relative z-1 w-100" style="object-fit: cover; min-height: 400px; border: 5px solid var(--primary);">
                </div>
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-left">
                <div class=" ">
                    <p class="text-muted fs-5 mb-3 text-justify" style="line-height: 1.7;">
                        For women in Pune seeking the care of a female surgeon, <a href="{{ route('about') }}" class="fw-bold no-underline" style="color: var(--primary);">Dr. Aparna Venugopal</a> provides safe and advanced <strong style="color: var(--primary);">general and laparoscopic surgical care</strong> with a focus on comfort, privacy, and personalized treatment. She uses modern minimally invasive techniques to support smoother recovery and better outcomes.
                    </p>

                    <p class="text-muted fs-5 mb-4 text-justify" style="line-height: 1.7;">
                        Her expertise includes gallstone treatment, appendicitis surgery, hernia repair, fissure, piles, fistula, pilonidal sinus management, and breast lump evaluation and surgery. She ensures compassionate care with a patient-focused approach throughout the surgical journey.
                    </p>
                    <p class="fs-5 fw-bold mb-3" style="color: var(--primary)!important;">Consult Dr. Aparna Venugopal Today!</p>

                    <div class="mt-2">
                        <a href="{{ route('contact') }}" class="btn-primary-theme px-5 py-3 rounded-0 text-uppercase fw-bold shadow-sm d-inline-flex align-items-center gap-2 transition-all btn-text-sm">
                            <span>Book Appointment</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper(".heroSwiper", {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });

        new Swiper(".servicesSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".custom-services-next",
                prevEl: ".custom-services-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });
    });
</script>
@endsection