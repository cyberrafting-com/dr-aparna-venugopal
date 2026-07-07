@extends('layouts.default')

@php
    $title = 'Gallery | Dr. Aparna Venugopal';
@endphp

@section('meta_desc', 'Browse the gallery of Dr. Aparna Venugopal — surgical facilities, clinic environment and patient care moments.')

@section('content')

<main class="gallery-page">
    <section class="simple-breadcrumb text-center">
        <div class="breadcrumb-wave breadcrumb-wave-one"></div>
        <div class="breadcrumb-wave breadcrumb-wave-two"></div>
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="about-simple-title display-3 mb-2">Gallery</h1>
                <div class="crumb-line">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="mx-2">/</span>
                    <span>Gallery</span>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-section bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="simple-kicker mb-3">Our Facilities</span>
                <h2 class="about-simple-title">Photo Gallery</h2>
            </div>

            <div class="row g-4">
                <!-- Gallery Item 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="gallery-page-item overflow-hidden rounded-3 shadow-sm position-relative">
                        <a data-fslightbox="gallery-page" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
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
                        <a data-fslightbox="gallery-page" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
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
                        <a data-fslightbox="gallery-page" href="{{ asset('resources/assets/images/gallery-d.png') }}" class="d-block position-relative">
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
</main>

<!-- fsLightbox for Gallery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.1/index.min.js"></script>

@endsection
