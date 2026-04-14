<?php include('./includes/header.php'); ?>

<style>
    /* --- CAREERS PAGE PALETTE: Gold/Orange Theme --- */
    :root {
        --primary-accent: #ff6a00;
        /* Deep Orange/Gold */
        --primary-dark: #cc5500;
        /* Darker shade for hover/strong text */
        --secondary-bg: #f8f9fb;
        /* Soft background */
        --text-dark: #212529;
        --text-muted: #6c757d;
        --shadow-subtle: 0 4px 12px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    /* General Styling */
    .page-banner-wrap {
        padding: 16rem 0;
    }

    .page-heading h1 {
        font-size: 3.5rem;
        font-weight: 700;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
    }

    .subtitle {
        color: var(--primary-accent);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
        display: block;
        margin-bottom: 0.5rem;
    }

    .highlight {
        color: var(--primary-accent);
    }

    .section-padding {
        padding: 100px 0;
    }

    /* 1. Hero & Culture Section */
    .culture-section {
        background-color: #ffffff;
    }

    .culture-points .icon-box {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .culture-points .icon-box:hover {
        transform: translateY(-5px);
        background: var(--secondary-bg);
    }

    .culture-points .icon-box i {
        font-size: 3rem;
        color: var(--primary-accent);
        margin-bottom: 15px;
    }

    /* 2. Benefits Section */
    .benefits-section {
        background: var(--secondary-bg);
    }

    .benefit-card {
        background: #ffffff;
        padding: 25px;
        border-radius: 12px;
        border-left: 5px solid var(--primary-accent);
        box-shadow: var(--shadow-subtle);
        transition: all 0.3s ease;
    }

    .benefit-card:hover {
        box-shadow: 0 8px 15px rgba(255, 106, 0, 0.15);
        transform: scale(1.02);
    }

    .benefit-card i {
        color: var(--primary-accent);
        font-size: 1.8rem;
        margin-right: 15px;
    }

    /* 3. General Application Section (New Styling) */
    .application-section {
        background-color: #ffffff;
    }

    .application-form-wrapper {
        background: var(--secondary-bg);
        padding: 40px;
        border-radius: 15px;
        box-shadow: var(--shadow-subtle);
    }

    .form-control:focus {
        border-color: var(--primary-accent);
        box-shadow: 0 0 0 0.25rem rgba(255, 106, 0, 0.25);
    }

    /* Button Styling */
    .btn-primary {
        background-color: var(--primary-accent) !important;
        border-color: var(--primary-accent) !important;
        color: #fff !important;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
        transform: translateY(-1px);
        box-shadow: 0 3px 10px rgba(255, 106, 0, 0.4);
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .page-banner-wrap {
            padding: 11rem 0;
        }

        .page-heading h1 {
            font-size: 2.5rem;
        }

        .section-padding {
            padding: 70px 0;
        }

        .culture-section img {
            margin-bottom: 2.5rem;
        }
    }

    @media (max-width: 767px) {
        .page-banner-wrap {
            padding: 6.5rem 0;
        }

        .page-heading h1 {
            font-size: 2.2rem;
        }

        .section-padding {
            padding: 55px 0;
        }

        .application-form-wrapper {
            padding: 30px 20px;
        }

        h2.fs-1 {
            font-size: 1.85rem !important;
        }

        .lead {
            font-size: 1.15rem;
        }
    }

    @media (max-width: 575px) {
        .page-banner-wrap {
            padding: 5.5rem 0;
        }

        .page-heading h1 {
            font-size: 1.8rem;
        }

        .icon-box i {
            font-size: 2.3rem;
        }

        .icon-box h6 {
            font-size: 0.95rem;
        }

        .application-form-wrapper {
            padding: 25px 15px;
        }

        .subtitle {
            font-size: 0.8rem;
            letter-spacing: 1px;
        }
    }
</style>

<div class="page-banner-wrap text-center " style="background-image: url('/assets/img/hero/careerpage.png');">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Join Our Global Team</h1>
        </div>
    </div>
</div>

<section class="culture-section section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">




                <img src="/assets/img/about/contact.jpg" class="img-fluid rounded-4 " alt="Team working in an office">
            </div>
            <div class="col-lg-6">
                <span class="subtitle">Careers at TurantGo</span>
                <h2 class="fw-bold fs-1 mb-4">Pioneering the Future of <span class="highlight">Logistics Excellence</span></h2>
                <p class="lead text-dark">
                    We’re not just moving goods — we’re redefining what’s possible in the future of multimodal logistics.
                    Join a team driven by innovation, speed, sustainability, and intelligent global connectivity.
                </p>
                <p class="text-muted">
                    At TurantGo, your work drives eco-efficient logistics and future-ready multimodal networks across domestic and international corridors.
                    We believe in bold thinkers, continuous learning, and empowering every individual to grow with purpose and impact.
                </p>

                <div class="row culture-points mt-5 g-4">
                    <div class="col-6 col-md-4">
                        <div class="icon-box">
                            <i class="fas fa-lightbulb colorblue"></i>
                            <h6 class="fw-bold colorblue">Innovation First</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="icon-box">
                            <i class="fas fa-handshake colorblue"></i>
                            <h6 class="fw-bold colorblue">Collaborative Team</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="icon-box">
                            <i class="fas fa-chart-line colorblue"></i>
                            <h6 class="fw-bold colorblue">Growth Opportunities</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="benefits-section section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="subtitle">Invest in Your Future</span>
            <h2 class="fw-bold fs-1">Unmatched <span class="highlight">Employee Benefits</span></h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card h-100">
                    <i class="fas fa-heartbeat"></i>
                    <h5 class="d-inline fw-bold text-dark">Comprehensive Health Coverage</h5>
                    <p class="text-muted mt-2 mb-0">Full medical, dental, and vision plans to ensure you and your family are always covered.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card h-100">
                    <i class="fas fa-plane-departure"></i>
                    <h5 class="d-inline fw-bold text-dark">Generous Paid Time Off (PTO)</h5>
                    <p class="text-muted mt-2 mb-0">Time off for vacations, personal days, and paid parental leave to maintain work-life balance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card h-100">
                    <i class="fas fa-graduation-cap"></i>
                    <h5 class="d-inline fw-bold text-dark">Learning & Development Stipends</h5>
                    <p class="text-muted mt-2 mb-0">Budget for continuous professional development, certifications, and advanced training.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card h-100">
                    <i class="fas fa-wallet"></i>
                    <h5 class="d-inline fw-bold text-dark">Performance-Based Bonuses</h5>
                    <p class="text-muted mt-2 mb-0">Competitive compensation packages with annual bonuses tied directly to company and individual success.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card h-100">
                    <i class="fas fa-laptop-code"></i>
                    <h5 class="d-inline fw-bold text-dark">Modern Workspace & Tech</h5>
                    <p class="text-muted mt-2 mb-0">Ergonomic offices, high-spec equipment, and flexible work options (hybrid/remote) where applicable.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card h-100">
                    <i class="fas fa-hands-helping"></i>
                    <h5 class="d-inline fw-bold text-dark">Wellness Programs</h5>
                    <p class="text-muted mt-2 mb-0">Access to fitness stipends, mental health resources, and employee assistance programs.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="application-section section-padding pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="subtitle">Future Opportunities</span>
                <h2 class="fw-bold fs-1 mb-4">Submit Your <span class="highlight">General Application</span></h2>

                <p class="lead text-dark mb-5">
                    If you’re a driven professional ready to create impact in logistics, tech, or operations, we want to hear from you. Even if your ideal role isn’t listed yet, submit your profile and CV. We actively review talent and will connect with you when the right opportunity aligns. Be part of our next-generation, eco-smart logistics mission.
                </p>

                <div class="application-form-wrapper">
                    <h4 class="fw-bold text-dark mb-4">Let's Connect</h4>
                    <form action="/carrers_application.php" method="POST" enctype="multipart/form-data" id="career-form">

                        <!-- Honeypot -->
                        <input type="text" name="website" style="display:none !important; visibility:hidden; height:0;">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="contact_number" placeholder="Contact Number" pattern="^[\+]?[0-9\s\-\(\)]{10,}$" title="Please enter at least 10 digits" required>
                            </div>

                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="about" rows="3" placeholder="Write About Yourself" required></textarea>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="address" rows="3" placeholder="Current Address" required></textarea>
                            </div>

                            <div class="col-12">
                                <label for="pdf_upload" class="form-label text-start d-block text-dark fw-bold">
                                    Upload Resume/CV (PDF Only, Max 5MB)
                                </label>
                                <input class="form-control" type="file" id="pdf_upload" name="pdf_upload" accept=".pdf" required>
                            </div>

                            <!-- Hidden reCAPTCHA v3 token -->
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                            <div class="col-12 mt-4">
                                <button type="submit" id="submit-btn" class="btn btn-primary btn-lg w-100">
                                    Submit Application
                                </button>
                            </div>

                            <!-- Terms & Privacy Note -->
                            <div class="text-center mt-2">
                                <p class="text-muted" style="font-size: 12px;">
                                    This site is protected by reCAPTCHA and the Google
                                    <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a>
                                    and
                                    <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a>
                                    apply.
                                </p>
                            </div>
                        </div>
                    </form>

                    <!-- Google reCAPTCHA v3 Script -->




                </div>
            </div>
        </div>
    </div>
</section>

<?php include("./includes/footer.php"); ?>
