<!-- 1. HEADER (Sticky) -->
<header class="site-header header-transparent">
    <nav class="navbar navbar-expand-lg w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ url('/') }}" class="navbar-brand fw-bold font-heading d-flex flex-column align-items-start">
                    <span class="lh-sm logo-title">Dr. Aparna Venugopal</span>
                    <span class="mb-0 text-dark fw-normal font-body logo-subtitle">Consultant General & Laparoscopic Surgeon</span>
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0 shadow-none d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileOffcanvas" aria-controls="mobileOffcanvas">
                <i class="fa-solid fa-bars fs-2 text-dark"></i>
            </button>

            <!-- Main Nav (Desktop) -->
            <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="desktopNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item text-muted fs-5"><a href="{{ route('home') }}" class="nav-link fw-bold hover-underline">Home</a></li>
                    <li class="nav-item text-muted fs-5"><a href="{{ route('about') }}" class="nav-link fw-bold hover-underline">About</a></li>
                    <li class="nav-item services-nav-item text-muted fs-5">
                        <a href="#services" class="nav-link fw-bold hover-underline services-nav-link" aria-haspopup="true" aria-expanded="false">
                            Services <i class="fa-solid fa-chevron-down services-chevron"></i>
                        </a>
                        <div class="services-mega-menu" aria-label="Surgical services">
                            <!-- <div class="services-menu-header">
                                <span class="services-menu-kicker">Expert surgical care</span>
                                <h3>Our Services</h3>
                            </div> -->
                            <div class="services-menu-grid">
                                @foreach ([
                                'Laparoscopic appendix surgery' => route('services.laparoscopic-appendix-surgery'),
                                'Laparoscopic gall bladder surgery' => route('services.laparoscopic-gall-bladder-surgery'),
                                'Hernia repair (open & laparoscopic)' => route('services.hernia-repair'),
                                'Breast lump evaluation & surgery' => route('services.breast-lump-evaluation-surgery'),
                                'Piles, fissure & fistula treatment' => route('services.piles-fissure-treatment'),
                                'Pilonidal sinus surgery' => route('services.pilonidal-sinus-surgery'),
                                'Varicose vein surgery' => route('services.varicose-vein-surgery'),
                                'Lipoma & sebaceous cyst removal' => route('services.lipoma-sebaceous-cyst-removal'),
                                'Lymph node biopsy' => route('services.lymph-node-biopsy'),
                                'Nail surgeries' => route('services.nail-surgery'),
                                'Ear lobule repair' => route('services.ear-lobule-repair'),
                                'Wound debridement' => route('services.wound-debridement'),
                                'Incision and drainage of abscesses' => route('services.incision-and-drainage-of-abscesses')
                                ] as $service => $link)
                                <a href="{{ $link }}" class="service-menu-item">
                                    <i class="fa-solid fa-chevron-right service-menu-arrow" aria-hidden="true"></i>
                                    <p class="service-menu-label mb-0 text-muted fs-5">{{ $service }}</p>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li class="nav-item text-muted fs-5"><a href="{{ route('testimonial') }}" class="nav-link fw-bold hover-underline">Testimonials </a></li>
                    <!-- <li class="nav-item text-muted fs-5"><a href="{{ route('gallery') }}" class="nav-link fw-bold hover-underline">Gallery</a></li> -->
                    <li class="nav-item text-muted fs-5"><a href="{{route('contact')}}" class="nav-link fw-bold hover-underline">Contact </a></li>
                </ul>
            </div>

            <!-- Desktop Sidebar Toggle -->
            <div class="header-right d-none d-lg-block">
                <button class="btn menu-toggle text-dark border-0 bg-transparent p-2 d-flex flex-column gap-1 align-items-end">
                    <span class="toggle-line line-1"></span>
                    <span class="toggle-line line-2"></span>
                    <span class="toggle-line line-3"></span>
                </button>
            </div>
        </div>
    </nav>
</header>

<!-- Mobile Offcanvas Navbar -->
<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileOffcanvas" aria-labelledby="mobileOffcanvasLabel">
    <div class="offcanvas-header border-bottom px-4 py-4">
        <div class="logo">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold font-heading d-flex flex-column align-items-start">
                <span class="lh-sm logo-title">Dr. Aparna Venugopal</span>
                <span class="mb-0 text-dark fw-normal font-body logo-subtitle">Consultant General & Laparoscopic Surgeon</span>
            </a>
        </div>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4 py-3">
        <ul class="navbar-nav mb-2 mb-lg-0 w-100 gap-2">
            <li class="nav-item text-muted fs-5">
                <a href="{{ route('home') }}" class="nav-link fw-bold text-primary-theme d-flex align-items-center gap-3 px-3 py-2 rounded bg-light-theme"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item text-muted fs-5"><a href="{{ route('about') }}" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded"><i class="fa-solid fa-user-doctor text-muted"></i> About</a></li>
            <li class="nav-item text-muted fs-5">
                <button class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded border-0 bg-transparent w-100" type="button" data-bs-toggle="collapse" data-bs-target="#mobileServices" aria-expanded="false" aria-controls="mobileServices">
                    <i class="fa-solid fa-stethoscope text-muted"></i> Services
                    <i class="fa-solid fa-chevron-down ms-auto fs-6"></i>
                </button>
                <div class="collapse mobile-services-list" id="mobileServices">
                    <div class="bg-light rounded mt-2 p-2 shadow-sm">
                        @foreach ([
                        'Laparoscopic appendix surgery' => route('services.laparoscopic-appendix-surgery'),
                        'Laparoscopic gall bladder surgery' => route('services.laparoscopic-gall-bladder-surgery'),
                        'Hernia repair (open & laparoscopic)' => route('services.hernia-repair'),
                        'Breast lump evaluation & surgery' => route('services.breast-lump-evaluation-surgery'),
                        'Piles, fissure & fistula treatment' => route('services.piles-fissure-treatment'),
                        'Pilonidal sinus surgery' => route('services.pilonidal-sinus-surgery'),
                        'Varicose vein surgery' => route('services.varicose-vein-surgery'),
                        'Lipoma & sebaceous cyst removal' => route('services.lipoma-sebaceous-cyst-removal'),
                        'Lymph node biopsy' => route('services.lymph-node-biopsy'),
                        'Nail surgeries' => route('services.nail-surgery'),
                        'Ear lobule repair' => route('services.ear-lobule-repair'),
                        'Wound debridement' => route('services.wound-debridement'),
                        'Incision and drainage of abscesses' => route('services.incision-and-drainage-of-abscesses')
                        ] as $service => $link)
                        <a href="{{ $link }}" class="d-flex align-items-center gap-3 py-2 px-3 text-decoration-none rounded mobile-service-link">
                            <i class="fa-solid fa-angle-right" style="color: var(--primary);"></i>
                            <span class="mb-0 fs-5 text-muted">{{ $service }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="nav-item text-muted fs-5"><a href="{{route('testimonial')}}" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded"><i class="fa-solid fa-comment-medical text-muted"></i> Testimonials</a></li>
            <!-- <li class="nav-item text-muted fs-5"><a href="{{route('gallery')}}" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded"><i class="fa-solid fa-images text-muted"></i> Gallery</a></li> -->
            <li class="nav-item text-muted fs-5"><a href="{{route('contact')}}" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded"><i class="fa-solid fa-envelope text-muted"></i> Contact</a></li>
        </ul>
    </div>
</div>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay d-none d-lg-block"></div>

<!-- Sidebar Menu (Desktop Only) -->
<div class="info-sidebar d-none d-lg-block">
    <div class="sidebar-header d-flex align-items-center gap-3 mb-4">
        <div class="logo sidebar-logo flex-grow-1">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold font-heading d-flex flex-column align-items-start text-decoration-none">
                <span class="lh-sm logo-title">Dr. Aparna Venugopal</span>
                <span class="mb-0 fw-normal font-body logo-subtitle">Consultant General & Laparoscopic Surgeon</span>
            </a>
        </div>
        <button class="btn close-sidebar text-white fs-4 p-0" type="button" aria-label="Close sidebar"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="sidebar-content text-white">
        <p class="sidebar-intro mb-4 text-white fs-5">Advanced, compassionate general and laparoscopic surgical care.</p>

        <hr class="sidebar-divider mb-4">

        <h3 class="font-heading fw-bold mb-4 text-white">Contact Us</h3>

        <div class="contact-info">
            <div class="sidebar-contact-item">
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                <p class="mb-0 text-white fs-5">Hriday  Hospital, <br> First Floor, Rahul Downtown,<br> Mumbai Pune Bypass Road,<br> Punawale, Pimpri-Chinchwad, <br>Maharashtra 411033</p>
            </div>
            <div class="sidebar-contact-item">
                <i class="fa-solid fa-phone" aria-hidden="true"></i>
                <a href="tel:+919495208068" class="text-white fs-5 text-decoration-none">+91 94952 08068</a>
            </div>
        </div>
    </div>
</div>