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
                <div class="swiper-slide custom-hero-slide" style="background-image: url('https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="custom-hero-overlay"></div>
                    <div class="custom-hero-content" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Advanced General & Laparoscopic Care</h1>
                        <p class="text-white fs-5 mb-5" style="opacity: 0.9;">Providing minimally invasive surgical solutions for hernia, gallbladder, appendix, and more, ensuring faster recovery and better outcomes.</p>
                        <a href="#" class="custom-hero-btn">
                            Book Surgical Consultation <i class="fa-solid fa-arrow-right-long text-primary-theme ms-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide custom-hero-slide" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="custom-hero-overlay"></div>
                    <div class="custom-hero-content">
                        <h1>Expert Care for Piles & Varicose Veins</h1>
                        <p class="text-white fs-5 mb-5" style="opacity: 0.9;">Effective, safe, and minimally painful treatments using modern surgical techniques for quicker healing and lasting relief.</p>
                        <a href="#" class="custom-hero-btn">
                            Get Relief Today <i class="fa-solid fa-arrow-right-long text-primary-theme ms-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide custom-hero-slide" style="background-image: url('https://images.unsplash.com/photo-1516549655169-df83a0774514?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="custom-hero-overlay"></div>
                    <div class="custom-hero-content">
                        <h1>Trusted Day Care Surgical Procedures</h1>
                        <p class="text-white fs-5 mb-5" style="opacity: 0.9;">Precise minor surgeries including lipoma removal, cyst excision, and wound care, delivered with expert surgical precision.</p>
                        <a href="#" class="custom-hero-btn">
                            Book Appointment Now <i class="fa-solid fa-arrow-right-long text-primary-theme ms-1"></i>
                        </a>
                    </div>
                </div>

            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation -->
            <div class="swiper-button-next text-white opacity-50 pe-3 d-none d-md-flex"></div>
            <div class="swiper-button-prev text-white opacity-50 ps-3 d-none d-md-flex"></div>
        </div>

    </section>
</div>

<!-- 3. ABOUT SECTION -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="about-img-wrapper position-relative mx-auto about-img-custom">
                    <div class="about-bg-shape"></div>
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
                    <div class="service-carousel-card position-relative">
                        <img src="{{ asset('resources/assets/images/services/laparoscopic-gall-bladder.png') }}" class="w-100 h-100 object-fit-cover" alt="Laparoscopic Gall Bladder & Appendix Surgery">
                        <a href="#" class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </a>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading">Laparoscopic Gall Bladder & Appendix</h5>
                                <p class="mb-0 small">Minimally invasive procedures for fast recovery and minimal scarring.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="swiper-slide">
                    <div class="service-carousel-card position-relative">
                        <img src="{{ asset('resources/assets/images/services/hernia-repair.png') }}" class="w-100 h-100 object-fit-cover" alt="Hernia Repair">
                        <a href="#" class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </a>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading">Hernia Repair (Open & Laparoscopic)</h5>
                                <p class="mb-0 small">Expert surgical repair for all types of hernias ensuring long-term relief.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="swiper-slide">
                    <div class="service-carousel-card position-relative">
                        <img src="{{ asset('resources/assets/images/services/breast-lumps.png') }}" class="w-100 h-100 object-fit-cover" alt="Hernia Repair">
                        <a href="#" class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </a>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading">Breast Lump Evaluation & Surgery</h5>
                                <p class="mb-0 small">Comprehensive diagnosis and surgical management of breast conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="swiper-slide">
                    <div class="service-carousel-card position-relative">
                        <img src="{{ asset('resources/assets/images/services/piles.png') }}" class="w-100 h-100 object-fit-cover" alt="Piles, Fissure & Fistula Treatment">
                        <a href="#" class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </a>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading">Piles, Fissure & Fistula Treatment</h5>
                                <p class="mb-0 small">Advanced proctology treatments prioritizing patient comfort and quick healing.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="swiper-slide">
                    <div class="service-carousel-card position-relative">
                       <img src="{{ asset('resources/assets/images/services/varicose-vein.png') }}" class="w-100 h-100 object-fit-cover" alt="Varicose Vein Surgery" referrerpolicy="no-referrer">
                        <a href="#" class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </a>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading">Varicose Vein Surgery</h5>
                                <p class="mb-0 small">Modern surgical interventions to treat varicose veins effectively and safely.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="swiper-slide">
                    <div class="service-carousel-card position-relative">
                     <img src="{{ asset('resources/assets/images/services/day-care.png') }}" class="w-100 h-100 object-fit-cover" alt="Minor Surgeries & Day Care" referrerpolicy="no-referrer">
                        <a href="#" class="service-icon-link position-absolute top-0 end-0 m-3 rounded-circle d-flex align-items-center justify-content-center text-decoration-none shadow-sm">
                            <i class="fa-solid fa-arrow-right icon-rotate-45"></i>
                        </a>
                        <div class="service-content-box position-absolute bottom-0 start-0 w-100 p-3">
                            <div class="service-content-inner p-4 shadow-sm">
                                <h5 class="mb-2 fw-bold font-heading">Minor Surgeries & Day Care</h5>
                                <p class="mb-0 small">Lipoma, cyst removal, nail surgeries, ear lobule repair and wound debridement.</p>
                            </div>
                        </div>
                    </div>
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
<!-- 6. LAPAROSCOPIC PROCEDURES SECTION -->
<section class="section-padding bg-secondary-theme position-relative overflow-hidden">
    <!-- Abstract dotted SVG curve pattern for texture -->
    <div class="position-absolute w-100 h-100 top-0 start-0 pointer-events-none bg-pattern-dots"></div>

    <div class="container position-relative z-1">
        <div class="text-center mb-5 pb-4" data-aos="fade-up">
            <h2 class="section-title text-dark font-heading fw-bold display-5 text-primary-dark-custom" data-aos="zoom-in-up" data-aos-duration="1000">Laparoscopic Procedures</h2>
            <p class="text-muted fs-6 mt-3">Advanced minimally invasive surgical solutions</p>
        </div>

        <div class="row align-items-center">
            <!-- Left Side Items -->
            <div class="col-lg-4">
                <div class="d-flex flex-row-reverse align-items-start text-end mb-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center ms-4 flex-shrink-0 border border-1 border-secondary icon-box-lg">
                        <i class="fa-solid fa-file-medical fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2 text-primary-dark-custom">Cholecystectomy</h5>
                        <p class="text-muted small mb-0 lh-base">Minimally invasive gallbladder removal.</p>
                    </div>
                </div>

                <div class="d-flex flex-row-reverse align-items-start text-end mb-5" data-aos="fade-right" data-aos-delay="200">
                    <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center ms-4 flex-shrink-0 border border-1 border-secondary icon-box-lg">
                        <i class="fa-solid fa-notes-medical fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2 text-primary-dark-custom">Appendicectomy</h5>
                        <p class="text-muted small mb-0 lh-base">Keyhole surgery to remove the appendix.</p>
                    </div>
                </div>

                <div class="d-flex flex-row-reverse align-items-start text-end mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="300">
                    <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center ms-4 flex-shrink-0 border border-1 border-secondary icon-box-lg">
                        <i class="fa-solid fa-stethoscope fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2 text-primary-dark-custom">Hernia Repair</h5>
                        <p class="text-muted small mb-0 lh-base">Laparoscopic correction of hernia with small cuts.</p>
                    </div>
                </div>
            </div>

            <!-- Center Image -->
            <div class="col-lg-4 text-center mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="d-inline-block position-relative rounded-circle overflow-hidden shadow-lg border border-5 border-white circle-img-wrapper">
                    <img src="{{ asset('resources/assets/images/dummy-dr.png') }}" class="w-100 h-100 circle-img-inner" alt="Surgeon">
                </div>
            </div>

            <!-- Right Side Items -->
            <div class="col-lg-4">
                <div class="d-flex align-items-start mb-5" data-aos="fade-left" data-aos-delay="100">
                    <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center me-4 flex-shrink-0 border border-1 border-secondary icon-box-lg">
                        <i class="fa-solid fa-heart-pulse fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2 text-primary-dark-custom">Fundoplication</h5>
                        <p class="text-muted small mb-0 lh-base">Anti-reflux surgery for GERD treatment.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-5" data-aos="fade-left" data-aos-delay="200">
                    <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center me-4 flex-shrink-0 border border-1 border-secondary icon-box-lg">
                        <i class="fa-solid fa-staff-snake fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2 text-primary-dark-custom">Splenectomy</h5>
                        <p class="text-muted small mb-0 lh-base">Minimally invasive spleen removal.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start" data-aos="fade-left" data-aos-delay="300">
                    <div class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center me-4 flex-shrink-0 border border-1 border-secondary icon-box-lg">
                        <i class="fa-solid fa-disease fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2 text-primary-dark-custom">Hemicolectomy</h5>
                        <p class="text-muted small mb-0 lh-base">Partial colon removal using laparoscopy.</p>
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
                <div class="stat-number text-white" data-target="15">0</div>
                <div class="text-accent text-uppercase letter-spacing-1 small fw-bold">Years Experience</div>
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

                <h2 class="display-4 font-heading fw-bold mb-4 text-primary-dark-custom" data-aos="zoom-in-up" data-aos-duration="1000">Advanced Laparoscopy</h2>

                <p class="text-muted mb-4 fs-6 lh-lg pe-lg-4">Experience the most advanced minimally invasive procedures designed to ensure minimal scarring, faster recovery, and the highest standard of surgical care tailored for your well-being.</p>

                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <span class="list-text-dark">Laparoscopic Cholecystectomy</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="d-flex align-items-center justify-content-center rounded-circle me-3 flex-shrink-0 list-icon-sm">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <span class="list-text-dark">Laparoscopic Appendicectomy</span>
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

            <!-- Right Side Image -->
            <div class="col-lg-6 text-center text-lg-end" data-aos="fade-left" data-aos-delay="100">
                <div class="position-relative d-inline-block mt-4 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid shadow-lg featured-treatment-img" alt="Laparoscopic Surgery" referrerpolicy="no-referrer">

                    <!-- Floating Badge -->
                    <div class="position-absolute d-flex flex-column align-items-center justify-content-center text-center shadow-lg floating-badge-lg" data-aos="zoom-in" data-aos-delay="400">
                        <span class="fs-2 font-heading fw-bold lh-1 mb-1 text-white">25+</span>
                        <span class="small lh-sm px-2 text-white floating-badge-text-sm">Years Of<br>Experience</span>
                    </div>
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
                        <p class="fst-italic mb-4">"The care and attention I received were unmatched. The team is incredibly professional, and the results of my treatment exceeded all expectations."</p>
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
                        <p class="fst-italic mb-4">"From the moment you walk in, you feel the luxury. The doctors took their time to explain everything. I'm so happy with my recovery!"</p>
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
                        <p class="fst-italic mb-4">"A completely transformative experience. The clinic is pristine, and the staff made sure I was comfortable the entire time. Highly recommend."</p>
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
                        <p class="fst-italic mb-4">"Dr. Aparna is an excellent surgeon. The procedure was smooth and the post-operative care was phenomenal. I felt completely safe and well cared for."</p>
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
                        <p class="fst-italic mb-4">"Very professional and empathetic approach. Everything was explained in detail before the surgery, which put my mind at ease. Fantastic experience overall."</p>
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
            <span class="section-subtitle">Our Work</span>
            <h2 class="section-title mb-0" data-aos="zoom-in-up" data-aos-duration="1000">Gallery</h2>
        </div>

        <div class="row g-4">
            <!-- Gallery Item 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="gallery-item overflow-hidden rounded-3 shadow-sm position-relative">
                    <a data-fslightbox="gallery" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
                        <img src="{{ asset('resources/assets/images/gallery-d.png') }}" class="img-fluid w-100 transition-all hover-zoom gallery-img-custom" alt="Gallery Image 1">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center transition-all">
                            <div class="gallery-icon text-white rounded-circle d-flex align-items-center justify-content-center transition-all shadow gallery-icon-custom">
                                <i class="fa-solid fa-plus fs-3"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-item overflow-hidden rounded-3 shadow-sm position-relative">
                    <a data-fslightbox="gallery" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
                        <img src="{{ asset('resources/assets/images/gallery-d.png') }}" class="img-fluid w-100 transition-all hover-zoom gallery-img-custom" alt="Gallery Image 2">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center transition-all">
                            <div class="gallery-icon text-white rounded-circle d-flex align-items-center justify-content-center transition-all shadow gallery-icon-custom">
                                <i class="fa-solid fa-plus fs-3"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-item overflow-hidden rounded-3 shadow-sm position-relative">
                    <a data-fslightbox="gallery" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
                        <img src="{{ asset('resources/assets/images/gallery-d.png') }}" class="img-fluid w-100 transition-all hover-zoom gallery-img-custom" alt="Gallery Image 3">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center transition-all">
                            <div class="gallery-icon text-white rounded-circle d-flex align-items-center justify-content-center transition-all shadow gallery-icon-custom">
                                <i class="fa-solid fa-plus fs-3"></i>
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

<!-- 10. CTA SECTION -->
<section class="section-padding cta-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <span class="section-subtitle text-white-50">Ready to transform?</span>
                <h2 class="display-4 font-heading fw-bold mb-4">Begin Your Journey to Flawless Skin Today</h2>
                <p class="fs-5 text-white-50 mb-5">Schedule a complimentary consultation with our expert aesthetic physicians.</p>
                <a href="#" class="btn-primary-theme px-5 py-3 fs-5">Book Your Consultation</a>
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