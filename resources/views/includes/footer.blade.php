<!-- 11. FOOTER -->
<footer class="site-footer" style="padding-bottom: 0;">
    <div class="container pb-4">
        <div class="row g-4 mb-4">
            <!-- Column 1: Logo and Paragraph -->
            <div class="col-lg-4">
                <div class="logo mb-4">
                    <a href="{{ url('/') }}" class="footer-brand fs-4 fw-bold font-heading d-flex flex-column align-items-start text-decoration-none">
                        <span class="lh-sm" style="font-family: 'Playfair Display', serif;">Dr Aparna Venugopal</span>
                        <span class="mb-0 fs-5 text-muted fw-normal font-body" style="margin-top: 2px;">General Surgeon</span>
                    </a>
                </div>
                <p class="text-muted fs-5 mb-4 pe-lg-4">Expert General & Laparoscopic Surgeon delivering minimally invasive and advanced surgical care.</p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <!-- Column 2: Contact Info -->
            <div class="col-lg-4">
                <h5 class="footer-title mb-4">Contact Info</h5>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex text-muted fs-5">
                        <i class="fa-solid fa-location-dot mt-1 me-3" style="color: var(--primary);"></i>
                        <p class="text-muted fs-5 mb-0">Hriday Mother & Child Care Hospital<br>First Floor, Rahul Downtown,<br>Mumbai Pune Bypass Rd Flyover,<br>beside SK CNG Pump, Punawale,<br>Pimpri-Chinchwad, Maharashtra 411033</p>
                    </li>
                    <li class="mb-3 d-flex align-items-center text-muted fs-5">
                        <i class="fa-solid fa-phone me-3" style="color: var(--primary);"></i>
                        <a href="tel:+919495208068" class="text-muted fs-5 text-decoration-none mb-0">+91 94952 08068</a>
                    </li>
                    <li class="d-flex align-items-center text-muted fs-5">
                        <i class="fa-solid fa-envelope me-3" style="color: var(--primary);"></i>
                        <a href="mailto:venugopalaparna9217@gmail.com" class="text-muted fs-5 text-decoration-none mb-0">venugopalaparna9217@gmail.com</a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Map -->
            <div class="col-lg-4">
                <h5 class="footer-title mb-4">Location</h5>
                <div class="map-container overflow-hidden rounded shadow-sm" style="height: 200px;">
                    <iframe src="https://maps.google.com/maps?q=Hriday+Mother+&+Child+Care+Hospital,+Punawale&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center">
        <p class="mb-0 fs-5 text-white">&copy; {{ date('Y') }} Dr Aparna Venugopal. All rights reserved.</p>
    </div>
</footer>

<!-- Back to Top with Progress -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
    <i class="fa-solid fa-arrow-up"></i>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var progressPath = document.querySelector('.progress-wrap path');
        if (progressPath) {
            var pathLength = progressPath.getTotalLength();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
            var updateProgress = function() {
                var scroll = window.scrollY;
                var height = document.documentElement.scrollHeight - window.innerHeight;
                var progress = pathLength - (scroll * pathLength / height);
                progressPath.style.strokeDashoffset = progress;
            }
            updateProgress();
            window.addEventListener('scroll', updateProgress);
            var offset = 50;
            window.addEventListener('scroll', function() {
                if (window.scrollY > offset) {
                    document.querySelector('.progress-wrap').classList.add('active-progress');
                } else {
                    document.querySelector('.progress-wrap').classList.remove('active-progress');
                }
            });
            document.querySelector('.progress-wrap').addEventListener('click', function(event) {
                event.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                return false;
            });
        }
    });
</script>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Include custom JS logic -->
<script src="{{ asset('resources/assets/js/main.js') }}"></script>