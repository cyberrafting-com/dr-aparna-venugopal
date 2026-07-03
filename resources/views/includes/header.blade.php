<!-- 1. HEADER (Sticky) -->
<header class="site-header header-transparent">
    <nav class="navbar navbar-expand-lg w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ url('/') }}" class="navbar-brand fs-4 fw-bold font-heading d-flex flex-column align-items-start">
                    <span class="lh-sm" style="font-family: 'Playfair Display', serif;">Dr Aparna Venugopal</span>
                    <span class="mb-0 fs-5 text-dark fw-normal font-body" style="margin-top: 2px;">General Surgeon</span>
                </a>
            </div>
            
            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0 shadow-none d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileOffcanvas" aria-controls="mobileOffcanvas">
                <i class="fa-solid fa-bars fs-2 text-dark"></i>
            </button>

            <!-- Main Nav (Desktop) -->
            <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="desktopNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link fw-bold hover-underline" style="text-transform: none;">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link fw-bold hover-underline" style="text-transform: none;">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link fw-bold hover-underline" style="text-transform: none;">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link fw-bold hover-underline" style="text-transform: none;">Testimonials </a></li>
                    <li class="nav-item"><a href="#" class="nav-link fw-bold hover-underline" style="text-transform: none;">Gallery</a></li>
                    <li class="nav-item"><a href="#" class="nav-link fw-bold hover-underline" style="text-transform: none;">Contact </a></li>
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
<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileOffcanvas" aria-labelledby="mobileOffcanvasLabel" style="width: 320px; border-right: none;">
    <div class="offcanvas-header border-bottom px-4 py-4">
        <div class="logo">
            <a href="{{ url('/') }}" class="navbar-brand fs-4 fw-bold font-heading d-flex flex-column align-items-start">
                <span class="lh-sm text-dark" style="font-family: 'Playfair Display', serif;">Dr Aparna Venugopal</span>
                <span class="mb-0 fs-5 text-dark fw-normal font-body" style="margin-top: 2px;">General Surgeon</span>
            </a>
        </div>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4 py-3">
        <ul class="navbar-nav mb-2 mb-lg-0 w-100 gap-2">
            <li class="nav-item"><a href="#" class="nav-link fw-bold text-primary-theme d-flex align-items-center gap-3 px-3 py-2 rounded bg-light-theme" style="text-transform: none; font-size: 18px;"><i class="fa-solid fa-house" style="width: 25px; text-align: center;"></i> Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" style="text-transform: none; font-size: 18px;"><i class="fa-solid fa-user-doctor text-muted" style="width: 25px; text-align: center;"></i> About</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" style="text-transform: none; font-size: 18px;"><i class="fa-solid fa-stethoscope text-muted" style="width: 25px; text-align: center;"></i> Services</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" style="text-transform: none; font-size: 18px;"><i class="fa-solid fa-comment-medical text-muted" style="width: 25px; text-align: center;"></i> Testimonials</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" style="text-transform: none; font-size: 18px;"><i class="fa-solid fa-images text-muted" style="width: 25px; text-align: center;"></i> Gallery</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" style="text-transform: none; font-size: 18px;"><i class="fa-solid fa-envelope text-muted" style="width: 25px; text-align: center;"></i> Contact</a></li>
        </ul>
    </div>
</div>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay d-none d-lg-block"></div>

<!-- Sidebar Menu (Desktop Only) -->
<div class="info-sidebar d-none d-lg-block">
    <div class="sidebar-header d-flex justify-content-between align-items-center mb-4">
        <div class="logo">
            <a href="{{ url('/') }}" class="navbar-brand fs-4 fw-bold font-heading text-white d-flex flex-column align-items-start">
                <span class="lh-sm text-white" style="font-family: 'Playfair Display', serif;">Dr Aparna Venugopal</span>
                <span class="mb-0 fs-5 text-white fw-normal font-body" style="margin-top: 2px;">General Surgeon</span>
            </a>
        </div>
        <button class="btn close-sidebar text-white fs-4 p-0"><i class="fa-solid fa-xmark"></i></button>
    </div>
    
    <div class="sidebar-content text-white">
        <p class="mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
        
        <hr class="border-secondary mb-4 opacity-25">
        
        <h3 class="font-heading fw-bold mb-4 text-white">Contact with Us</h3>
        
        <div class="contact-info mb-4">
            <p class="mb-3">70 Washington Square South,<br>New York, NY 10012, United States</p>
            <p class="mb-3">Call us: <a href="tel:112346339870" class="text-white text-decoration-none">1 (1234) 633-9870</a></p>
            <p class="mb-4">Mail: <a href="mailto:Mellea@gmail.com" class="text-white text-decoration-none">Mellea@gmail.com</a></p>
            
            <p class="mb-2">Mon-Sat: 10:00 To 07:00 - 18.00pm</p>
            <p class="mb-0">Saturday-Closed</p>
        </div>
        
        <hr class="border-secondary mb-4 opacity-25">
        
        <div class="social-links d-flex gap-3 mt-4">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </div>
</div>
