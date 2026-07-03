document.addEventListener('DOMContentLoaded', function() {
    // 1. Initialize AOS (Animate on Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 50
        });
    }

    // 2. Sticky Header Logic
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.remove('header-transparent');
                header.classList.add('header-solid');
            } else {
                header.classList.add('header-transparent');
                header.classList.remove('header-solid');
            }
        });
        
        if (window.scrollY > 50) {
            header.classList.remove('header-transparent');
            header.classList.add('header-solid');
        } else {
            header.classList.add('header-transparent');
            header.classList.remove('header-solid');
        }
    }

    // 3. Initialize Swiper for Testimonials
    if (typeof Swiper !== 'undefined') {
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.custom-testimonial-next',
                prevEl: '.custom-testimonial-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    }

    // 4. Counter Animation (Stats)
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                animateCounters();
                observer.disconnect();
            }
        });
        observer.observe(statsSection);
    }

    // 5. Sidebar Toggle Logic
    const menuToggle = document.querySelector('.menu-toggle');
    const closeSidebar = document.querySelector('.close-sidebar');
    const infoSidebar = document.querySelector('.info-sidebar');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');

    if (menuToggle && closeSidebar && infoSidebar && sidebarOverlay) {
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            infoSidebar.classList.add('active');
            sidebarOverlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });

        closeSidebar.addEventListener('click', function(e) {
            e.preventDefault();
            infoSidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        sidebarOverlay.addEventListener('click', function() {
            infoSidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
});
