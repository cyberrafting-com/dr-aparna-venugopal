@extends('layouts.default')

@php
    $title = 'Patient Testimonials | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Read what our patients have to say about their experience and surgical care with Dr. Aparna Venugopal.')

@section('content')

<main class="testimonials-page">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">
               
                <h1 class="about-simple-title display-3 mb-2">Patient Reviews</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="mx-2">/</span>
                    <span>Testimonials</span>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-lg-12">
                    <div class="testimonial-card-premium h-100">
                        <div class="testimonial-header">
                            <div class="testimonial-brand-icon">
                                <svg viewBox="0 0 48 48" width="45px" height="45px">
                                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.7 17.74 9.5 24 9.5z"/>
                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.2-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                </svg>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Anmol Patel</h4>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial-quote-icon">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            I recently visited the hospital for a family emergency and had a very positive experience. Living nearby, it is a relief to have a reliable surgeon. What I Liked: Dr. Aparna is exceptional. She is very patient, listens carefully, and doesn’t rush into unnecessary tests. <a href="#" class="testimonial-more-link">More...</a>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-lg-12">
                    <div class="testimonial-card-premium h-100">
                        <div class="testimonial-header">
                            <div class="testimonial-brand-icon">
                                <svg viewBox="0 0 48 48" width="45px" height="45px">
                                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.7 17.74 9.5 24 9.5z"/>
                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.2-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                </svg>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Rajesh Kumar</h4>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                            </div>
                            <div class="testimonial-quote-icon">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            Dr. Aparna performed my gallbladder surgery. From the initial consultation to post-op care, everything was handled with utmost professionalism. Her reassuring demeanor helped calm my nerves, and the recovery was incredibly smooth. Highly recommended! <a href="#" class="testimonial-more-link">More...</a>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-lg-12">
                    <div class="testimonial-card-premium h-100">
                        <div class="testimonial-header">
                            <div class="testimonial-brand-icon">
                                <svg viewBox="0 0 48 48" width="45px" height="45px">
                                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.7 17.74 9.5 24 9.5z"/>
                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.2-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                </svg>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Meera Sharma</h4>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial-quote-icon">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            The care I received was outstanding. She takes the time to explain the diagnosis in simple terms and ensures you understand all the options. The hospital staff is also very supportive. I felt completely safe under her treatment. <a href="#" class="testimonial-more-link">More...</a>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="col-lg-12">
                    <div class="testimonial-card-premium h-100">
                        <div class="testimonial-header">
                            <div class="testimonial-brand-icon">
                                <svg viewBox="0 0 48 48" width="45px" height="45px">
                                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.7 17.74 9.5 24 9.5z"/>
                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.2-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                </svg>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Suresh Nair</h4>
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial-quote-icon">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            My father had to undergo an emergency hernia surgery. Dr. Aparna was brilliant—not just with the surgery but with how she communicated with us during a stressful time. The results are perfect, and his recovery was very fast. Thank you! <a href="#" class="testimonial-more-link">More...</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection
