<!-- 11. FOOTER -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-4 mb-5">
            <!-- Column 1: Logo and Paragraph -->
            <div class="col-lg-4">
                <div class="logo mb-4">
                    <a href="{{ url('/') }}" class="text-decoration-none d-flex flex-column align-items-start">
                        <span class="fs-3 fw-bold font-heading" style="color: var(--primary);">Dr Aparna Venugopal</span>
                        <p class="mb-0 fs-6 text-muted fw-normal font-body" style="font-size: 0.9rem !important; text-transform: capitalize; margin-top: 2px;">General Surgeon</p>
                    </a>
                </div>
                <p class="text-muted mb-4 pe-lg-4">A highly trained General Surgeon with strong expertise in minimally invasive, laparoscopic, and emergency surgical care.</p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <!-- Column 2: Contact Info -->
            <div class="col-lg-4">
                <h5 class="footer-title mb-4">Contact Info</h5>
                <ul class="list-unstyled text-muted">
                    <li class="mb-3 d-flex">
                        <i class="fa-solid fa-location-dot mt-1 me-3" style="color: var(--primary);"></i>
                        <span>Amrita Institute of Medical Sciences<br>Kochi, Kerala</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fa-solid fa-phone me-3" style="color: var(--primary);"></i>
                        <span>+91 98765 43210</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa-solid fa-envelope me-3" style="color: var(--primary);"></i>
                        <span>contact@draparna.com</span>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Map -->
            <div class="col-lg-4">
                <h5 class="footer-title mb-4">Location</h5>
                <div class="map-container overflow-hidden rounded shadow-sm" style="height: 200px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.847525287754!2d76.29749551479427!3d10.02941199283086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d08f7d983c5%3A0xc6c4f03126f554!2sAmrita%20Institute%20of%20Medical%20Sciences%20(AIMS)!5e0!3m2!1sen!2sin!4v1689680327429!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="text-center pt-4 border-top border-secondary opacity-75">
            <p class="text-muted small mb-0" style="font-size: 14px !important;">&copy; {{ date('Y') }} Dr Aparna Venugopal. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Back to Top with Progress -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
    <i class="fa-solid fa-arrow-up"></i>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var progressPath = document.querySelector('.progress-wrap path');
    if(progressPath) {
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
        var updateProgress = function () {
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
            window.scrollTo({ top: 0, behavior: 'smooth' });
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