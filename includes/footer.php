<footer class="footer-1 footer-wrap">
    <div class="footer-widgets-wrapper theme-bg">
        <div class="container">
            <div class="row">



                <!-- Logo + About -->
                <div class="col-sm-6 col-xl-5">
                    <div class="about-transland pe-md-5 pe-xl-0">
                        <a href="/">
                            <img src="/assets/img/team/logo.png" alt="TurantGo" style="background:white;padding:10px; border-radius:5px; width:200px;">
                        </a>
                        <p>
                            TurantGo Multimodal Solutions provides seamless end-to-end logistics through
                            integrated air, rail, surface, and sea networks powered by intelligent digital systems.
                        </p>
                        <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-left">
                            <div class="text-left">
                                <div class="social-links pt-2">
                                    <a href="https://www.facebook.com/share/18NyVc65QW/" target="_blank"><i class="fab fa-facebook-f" style="color: #ffffff;font-size:19px;padding:3px;"></i></a>
                                    <a href="https://x.com/turantgo" target="_blank"><i class="fab fa-x-twitter" style="color: #ffffff;font-size:19px;padding:3px;"></i></a>
                                    <a href="https://www.instagram.com/p/DTkVD9uk54x/?utm_source=ig_web_button_share_sheet&igsh=MzRlODBiNWFlZA%3D%3D" target="_blank"><i class="fab fa-instagram" style="color: #ffffff;font-size:19px;padding:3px;"></i></a>
                                    <a href="https://www.linkedin.com/in/turantgo-multimodal-9392073ab?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank"><i class="fab fa-linkedin" style="color: #ffffff;font-size:19px;padding:3px;"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Divisions -->
                <div class="col-sm-6 col-xl-2">
                    <div class="single-footer-wid ps-xl-4">
                        <div class="wid-title">
                            <h6>Company</h6>
                        </div>
                        <ul>
                            <li><a href="/about">Who We Are</a></li>
                            <!-- <li><a href="/services/first-mile-and-last-mile">Our Services</a></li> -->
                            <li><a href="/career">Careers</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Services -->
                <div class="col-sm-6 col-xl-2">
                    <div class="single-footer-wid ps-xl-2">
                        <div class="wid-title">
                            <h6>Our Services</h6>
                        </div>
                        <ul>
                            <li><a href="/services/air-freight">Multimodal Solutions</a></li>
                            <li><a href="/services/warehousing">Warehousing</a></li>
                            <li><a href="/services/third-party-fourth-party">Supply Chain</a></li>
                            <li><a href="/services/first-mile-and-last-mile">First Mile | Last Mile</a></li>
                            <!-- <li><a href="#">Supply Chain Consulting</a></li> -->
                        </ul>
                    </div>
                </div>


                <!-- Contact Info -->
                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-wid site-info-widget">
                        <div class="wid-title">
                            <h6>Get In Touch</h6>
                        </div>

                        <div class="get-in-touch">

                            <div class="single-contact-info" itemscope itemtype="https://schema.org/LocalBusiness">
                                <meta itemprop="name" content="TurantGo Multimodal Solutions Pvt Ltd">
                                <div class="icon id1"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="contact-info" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                    <span itemprop="streetAddress">House No. 1642, Ward No. 21, Sheetal Nagar, Bagh Wali Gali, Jhajjar Road</span>, 
                                    <span itemprop="addressLocality">Rohtak</span>, 
                                    <span itemprop="postalCode">124001</span>, 
                                    <span itemprop="addressRegion">Haryana</span>, 
                                    <span itemprop="addressCountry">India</span>
                                </div>
                            </div>

                            <div class="single-contact-info">
                                <div class="icon id2"><i class="fal fa-phone fa-flip-horizontal"></i></div>
                                <div class="contact-info">
                                    <span>+91 7082799059 </span>
                                </div>
                            </div>

                            <div class="single-contact-info">
                                <div class="icon id3"><i class="fal fa-envelope"></i></div>
                                <div class="contact-info">
                                    <span>info@turantgo.com</span>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>

            </div><!-- row end -->
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid align-items-center">
            <div class="bottom-content-wrapper">
                <div class="row mx-3">

                    <div class="col-md-6 col-12">

                        <div class="copy-rights">
                            <p>©2025 <strong>TurantGo Multimodal Solutions Pvt. Ltd.</strong> All Rights Reserved</p>
                        </div>


                    </div>

                    <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-end">
                        <div class="text-left">
                            <p class="text">Developed by <a href="https://bcsads.com/" target="_blank" style="color: #ffffff;">BCS Group,Gandhidham</a></p>
                        </div>

                    </div>
                    <div class="col-sm-12 mt-3">

                    </div>

                </div><!-- row end -->
            </div>
        </div>
    </div>

</footer>


<script>
    // Hero Slider Logic
    const initHeroSlider = function() {
        const heroWrapper = document.querySelector('.hero-wrapper');
        if (!heroWrapper) return;

        const slides = heroWrapper.querySelectorAll('.slide');
        const dots = heroWrapper.querySelectorAll('.dot');
        const totalSlides = slides.length;
        let currentSlide = 0;
        let isAnimating = false;
        let autoPlayInterval;

        function updateSlides() {
            if (isAnimating) return;
            isAnimating = true;

            slides.forEach((slide, index) => {
                slide.classList.remove('active', 'prev', 'next', 'hidden');

                if (index === currentSlide) {
                    slide.classList.add('active');
                } else if (index === (currentSlide + 1) % totalSlides) {
                    slide.classList.add('next');
                } else if (index === (currentSlide - 1 + totalSlides) % totalSlides) {
                    slide.classList.add('prev');
                } else {
                    slide.classList.add('hidden');
                }
            });

            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });

            setTimeout(() => {
                isAnimating = false;
            }, 800);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            autoPlayInterval = setInterval(nextSlide, 5000);
        }

        function nextSlide() {
            if (isAnimating) return;
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlides();
            resetAutoPlay();
        }

        function prevSlide() {
            if (isAnimating) return;
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlides();
            resetAutoPlay();
        }

        function goToSlide(index) {
            if (isAnimating || index === currentSlide) return;
            currentSlide = index;
            updateSlides();
            resetAutoPlay();
        }

        // Event Listeners
        document.getElementById('nextBtn')?.addEventListener('click', nextSlide);
        document.getElementById('prevBtn')?.addEventListener('click', prevSlide);

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => goToSlide(index));
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') prevSlide();
            if (e.key === 'ArrowRight') nextSlide();
        });

        // Initialize Slider
        autoPlayInterval = setInterval(nextSlide, 5000);

        // Pause on hover
        heroWrapper.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
        heroWrapper.addEventListener('mouseleave', resetAutoPlay);

        // Sync initial state
        isAnimating = false;
        updateSlides();

        // Make slider visible (if hidden)
        heroWrapper.style.opacity = "1";
    };

    // Check if loader was already shown (subsequent pages)
    if (sessionStorage.getItem('loader_shown')) {
        initHeroSlider();
    } else {
        // First visit: wait for preloader (4.5s minimumAnimationTime + 0.5s fade)
        setTimeout(initHeroSlider, 5000);
    }
</script>


<!-- Swiper JS (CDN) - must load before init script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.card-img-container');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.2
        });

        cards.forEach(card => observer.observe(card));
    });
</script>
<script>
    const loaderWrapper = document.getElementById('loader-wrapper');
    const flyingPlane = document.getElementById('flying-plane');
    const mainContent = document.getElementById('content');
    const loaderShown = sessionStorage.getItem('loader_shown');

    window.addEventListener('load', function() {
        if (loaderShown) {
            // Subsequent visits: Hide immediately once window loads
            if (loaderWrapper) loaderWrapper.style.display = 'none';
            if (mainContent) mainContent.style.display = 'block';
        } else {
            // First visit: Show full animation (4.5s)
            const minimumAnimationTime = 4500;

            setTimeout(function() {
                if (flyingPlane) flyingPlane.style.display = 'none';
                if (loaderWrapper) loaderWrapper.classList.add('fade-out');

                setTimeout(() => {
                    if (loaderWrapper) loaderWrapper.style.display = 'none';
                    if (mainContent) mainContent.style.display = 'block';
                    sessionStorage.setItem('loader_shown', 'true');
                }, 500); // Fade duration
            }, minimumAnimationTime);
        }
    });
</script>

<!-- jQuery FIRST (only once) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="/assets/js/jquery.min.js"></script> -->

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js"></script>


<!-- Your local JS -->
<script src="/assets/js/modernizr.min.js?v=<?php echo get_asset_version('/assets/js/modernizr.min.js'); ?>"></script>
<script src="/assets/js/jquery.easing.js?v=<?php echo get_asset_version('/assets/js/jquery.easing.js'); ?>"></script>
<script src="/assets/js/isotope.pkgd.min.js?v=<?php echo get_asset_version('/assets/js/isotope.pkgd.min.js'); ?>"></script>
<script src="/assets/js/imageload.min.js?v=<?php echo get_asset_version('/assets/js/imageload.min.js'); ?>"></script>
<script src="/assets/js/scrollUp.min.js?v=<?php echo get_asset_version('/assets/js/scrollUp.min.js'); ?>"></script>
<script src="/assets/js/slick.min.js?v=<?php echo get_asset_version('/assets/js/slick.min.js'); ?>"></script>
<script src="/assets/js/slick-animation.min.js?v=<?php echo get_asset_version('/assets/js/slick-animation.min.js'); ?>"></script>
<script src="/assets/js/magnific-popup.min.js?v=<?php echo get_asset_version('/assets/js/magnific-popup.min.js'); ?>"></script>
<script src="/assets/js/wow.min.js?v=<?php echo get_asset_version('/assets/js/wow.min.js'); ?>"></script>
<!-- <script src="/assets/js/nice-select2.js"></script> -->

<!-- Active JS (must always load last) -->
<script src="/assets/js/active.js?v=<?php echo get_asset_version('/assets/js/active.js'); ?>"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    // Toastr Configuration
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Check for success/error parameters and show toasts
    window.addEventListener('load', function() {
        const urlParams = new URLSearchParams(window.location.search);

        if (urlParams.has('success')) {
            let msg = "Operation completed successfully!";
            if (window.location.pathname.includes('contact')) msg = "Your message has been sent successfully!";
            if (window.location.pathname.includes('career')) msg = "Your application has been submitted successfully!";
            toastr.success(msg);
        }

        if (urlParams.has('error')) {
            let errorType = urlParams.get('error');
            let msg = "An unexpected error occurred.";

            // Map common error codes to user-friendly messages
            const errorMap = {
                'captcha': "reCAPTCHA verification failed. Please try again.",
                '1': "Please fill in all required fields.",
                '2': "The email address you entered is invalid.",
                '4': "Transmission failed. Please try again later.",
                '5': "Invalid input or file format.",
                '6': "Security verification failed.",
                'phone': "Please enter a valid phone number (at least 10 digits).",
                'file': "Invalid file format or size (PDF only, max 5MB).",
                'file_missing': "Please upload your resume (PDF format)."
            };

            if (errorMap[errorType]) msg = errorMap[errorType];
            toastr.error(msg);
        }

        // Clean up URL parameters after showing toasts (cleaner UX)
        if (urlParams.has('success') || urlParams.has('error')) {
            const url = new URL(window.location);
            url.searchParams.delete('success');
            url.searchParams.delete('error');
            url.searchParams.delete('captcha'); // in case it was explicitly passed
            window.history.replaceState({}, document.title, url);
        }
    });
</script>


<script src="https://www.google.com/recaptcha/api.js?render=6LfLQWEsAAAAALSCT84HAUwuViW3Yydj5RQWP71b"></script>
<style>
    /* Ensure reCAPTCHA badge is visible and doesn't overlap with scroll-up button */
    .grecaptcha-badge {
        visibility: visible !important;
        bottom: 70px !important;
        /* Move it up slightly */
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contactForm = document.getElementById('contact-form');
        const careerForm = document.getElementById('career-form');

        function handleFormSubmit(e, form, action) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6LfLQWEsAAAAALSCT84HAUwuViW3Yydj5RQWP71b', {
                    action: action
                }).then(function(token) {
                    const recaptchaResponse = form.querySelector('[name="g-recaptcha-response"]');
                    if (recaptchaResponse) {
                        recaptchaResponse.value = token;
                        form.submit();
                    }
                });
            });
        }

        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                handleFormSubmit(e, contactForm, 'contact_submission');
            });
        }

        if (careerForm) {
            careerForm.addEventListener('submit', function(e) {
                const fileInput = document.getElementById('pdf_upload');
                if (fileInput && fileInput.files.length > 0) {
                    const fileSize = fileInput.files[0].size / 1024 / 1024; // in MB
                    if (fileSize > 5) {
                        e.preventDefault();
                        toastr.error("File is too large. Max size is 5MB.");
                        return false;
                    }
                }
                handleFormSubmit(e, careerForm, 'career_submission');
            });
        }
    });
</script>





<!-- WhatsApp Sticky Button -->
<a href="https://api.whatsapp.com/send?phone=917082799059" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
    .whatsapp-float {
        position: fixed !important;
        width: 60px;
        height: 60px;
        bottom: 30px;
        left: 30px;
        background-color: #25D366;
        color: #ffffff !important;
        border-radius: 50px;
        text-align: center;
        font-size: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.4);
        z-index: 20 !important;
        transition: all 0.3s ease;
        text-decoration: none !important;
        pointer-events: auto !important;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
        background-color: #128C7E;
        color: white !important;
    }
</style>

<div class="overlay"></div>
</body>

</html>
