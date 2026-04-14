<?php include('includes/header.php'); ?>

<style>
    /* --- ABOUT US PALETTE: Gold/Orange Theme --- */
    :root {
        --primary-accent: #ff6a00;
        /* Deep Orange/Gold */
        --primary-dark: #cc5500;
        /* Darker shade for hover/strong text */
        --secondary-bg: #f8f9fb;
        /* Soft background */
        --text-dark: #003e6ef6;
        --text-muted: #003e6ef6;
        --shadow-subtle: 0 4px 12px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    /* General Styling */
    /* .page-banner-wrap {
        padding: 8rem 0;
    } */

    .page-heading h1 {
        font-size: 3.5rem;
        font-weight: 700;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
    }

    .about-section,
    .about-detailed-section,
    .why-choose-section {
        padding: 100px 0;
    }

    @media (max-width: 768px) {

        .about-section,
        .about-detailed-section,
        .why-choose-section {
            padding: 50px 0;
        }
    }

    .subtitle {
        color: var(--primary-accent);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
        display: block;
        /* Ensures subtitle is on its own line */
        margin-bottom: 0.5rem;
    }

    .highlight {
        color: var(--primary-accent);
    }

    /* 1. About Section (Company Overview) */
    .about-section {
        padding: 100px 0;
        background: #fff;
        overflow: hidden;
    }

    @media (max-width: 991px) {
        .about-section {
            padding: 60px 0;
        }
    }

    .about-image-wrapper {
        position: relative;
        border-radius: 2rem;
        overflow: hidden;
        box-shadow: 0 40px 80px rgba(0, 0, 0, 0.12);
        height: 100%;
        min-height: auto;
    }

    .about-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .about-image-wrapper:hover img {
        transform: scale(1.08);
    }

    .section-header-inline {
        margin-bottom: 2rem;
    }

    .section-header-inline .subtitle-text {
        color: var(--primary-accent);
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 800;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        gap: 10px;
    }

    .section-header-inline .subtitle-text::after {
        content: '';
        width: 40px;
        height: 2px;
        background: var(--primary-accent);
    }

    .section-header-inline .main-title {
        color: #003755;
        font-size: clamp(2.2rem, 4vw, 3rem);
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 0;
        letter-spacing: -0.5px;
    }

    .about-text {
        font-size: 1.1rem;
        line-height: 1.75;
        color: #556a7d;
        margin-bottom: 1.5rem;
        max-width: 95%;
    }

    .info-box {
        background: #fff;
        padding: 35px 20px;
        border-radius: 20px;
        text-align: center;
        transition: all 0.4s ease;
        border: 1px solid #edf2f7;
        height: 100%;
        box-shadow: 0 10px 30px rgba(0, 55, 85, 0.05);
    }

    .info-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 55, 85, 0.1);
        border-color: var(--primary-accent);
    }

    .info-box i {
        font-size: 2.5rem;
        color: var(--primary-accent);
        margin-bottom: 20px;
        display: inline-block;
    }

    .info-box h6 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #003755;
        margin-bottom: 6px;
    }

    .info-box small {
        color: #8c9fb1;
        font-size: 0.95rem;
        font-weight: 500;
    }

    .ceo-photo img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border: 3px solid var(--primary-accent);
    }


    /* 2. BEIF Section (Our Approach) - Highly Styled */
    .beif-section {
        background: #ffffff;
    }

    .beif-box {
        transition: all 0.4s ease;
        background: var(--secondary-bg);
        border-radius: 1.5rem;
        padding: 3rem 2rem;
        position: relative;
        overflow: hidden;
    }

    .beif-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--primary-accent);
        transition: transform 0.4s ease;
        transform: scaleX(0);
        transform-origin: left;
    }

    .beif-box:hover::before {
        transform: scaleX(1);
    }

    .beif-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(255, 106, 0, 0.15);
        /* Orange tinted shadow */
    }

    .beif-box .icon i {
        color: var(--primary-accent);
    }

    .beif-box h5 {
        font-weight: 700;
    }

    /* 3. Detailed Section */
    .check-list {
        margin-top: 1.5rem;
    }

    .check-list li {
        margin-bottom: 0.8rem;
        color: var(--text-dark);
        list-style: none;
        padding-left: 1.5rem;
        position: relative;
    }

    .check-list li i {
        /* color: var(--primary-accent); */
        position: absolute;
        left: 0;
        top: 0;
        font-size: 1.1rem;
    }

    .check-list li strong {
        color: var(--primary-dark);
    }

    /* 4. Why Choose Us Section (Features) */
    .feature-card {
        border: 1px solid #eee;
        border-radius: 1rem;
        transition: all 0.3s ease;
        position: relative;
        padding: 2.5rem 1.5rem 1.5rem;
        /* Adjusted padding */
    }

    .feature-card:hover {
        border-color: var(--primary-accent);
        box-shadow: 0 8px 15px rgba(255, 106, 0, 0.1);
        transform: translateY(-5px);
    }

    .feature-icon-wrapper {
        position: absolute;
        top: -20px;
        /* Position icon slightly outside the card */
        left: 50%;
        transform: translateX(-50%);
        background: #fff;
        padding: 10px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2.2rem;
        color: var(--primary-accent);
        line-height: 1;
    }

    /* Button Styling (Specific to About Page) */
    .btn-warning {
        background-color: var(--primary-accent) !important;
        border-color: var(--primary-accent) !important;
        color: #fff !important;
        font-weight: 600;
        padding: 0.8rem 2.5rem;
        border-radius: 50px !important;
        transition: all 0.3s ease;
    }

    .btn-warning:hover {
        background-color: var(--primary-dark) !important;
        border-color: var(--primary-dark) !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 106, 0, 0.3);
    }
</style>
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('/assets/img/about/trurantgoo1.png');">
    <div class="container">
        <div class="page-heading text-white">
            <h1>About TurantGo</h1>
        </div>
    </div>
</div>


<section class="about-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <img src="/assets/img/about/truantgooooo.png" class="img-fluid" alt="TurantGo Multimodal Logistics - Integrated Air Rail Road Sea India">
                </div>
            </div>


            <div class="col-lg-6">
                <div class="section-header-inline text-center text-lg-start mb-4">
                    <span class="subtitle-text">Overview</span>
                    <h2 class="main-title" style="font-size: 2.5rem; font-weight: 700;">TurantGo Multimodal <br class="d-none d-xxl-block"> Solutions</h2>
                </div>

                <div class="content-body pe-lg-4 text-center text-lg-start">
                    <p class="about-text">
                        TurantGo is redefining how India moves its supply chains—creating a seamless, intelligent, and green-powered logistics ecosystem built for the future. We bring together next-generation technology, multimodal connectivity, and operational excellence to empower businesses with unmatched speed, visibility, and reliability.
                    </p>

                    <p class="about-text text-muted" style="font-size: 1rem; opacity: 0.8;">
                        We specialize in integrated management across air, rail, road, and sea channels—enabling faster, smarter, and highly reliable movement of goods through a unified operational structure.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="beif-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="subtitle">Our Foundation</span>
            <h2 class="fw-bold fs-1">Our Core <span class="highlight">B.E.I.F.</span> Approach</h2>
            <p class="text-muted">A strong framework that powers the future of multimodal logistics excellence.</p>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-sm-6">
                <div class="beif-box shadow-sm text-center h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-briefcase fa-3x"></i>
                    </div>
                    <h5 class="mb-2">Business Focus</h5>
                    <p class="mt-2 text-muted">
                        Dedicated to solving complex supply chain challenges with strategic planning and a customer-first vision.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="beif-box shadow-sm text-center h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-award fa-3x"></i>
                    </div>
                    <h5 class="mb-2">Excellence in Execution</h5>
                    <p class="mt-2 text-muted">
                        Delivering operational accuracy through optimized planning, precise monitoring, and real-time execution.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="beif-box shadow-sm text-center h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-lightbulb fa-3x"></i>
                    </div>
                    <h5 class="mb-2">Innovation & Intelligence</h5>
                    <p class="mt-2 text-muted">
                        Harnessing digital visibility, intelligent routing, and smart technologies for better predictive performance.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="beif-box shadow-sm text-center h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-rocket fa-3x"></i>
                    </div>
                    <h5 class="mb-2">Future-Driven</h5>
                    <p class="mt-2 text-muted">
                        Building scalable, sustainable, and future-ready logistics ecosystems for long-term partner success.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->



<section class="about-detailed-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <h2 class="fw-bold mb-4 fs-1">TurantGo:<span class=""> Driving the Future of Multimodal Logistics</span></h2>

                <p class="text pb-3">
                    TurantGo is built on the vision of creating a seamless, technology-driven, and green-powered ecosystem for modern supply chains. We are a next-generation logistics partner, specializing in the integrated management of air, rail, surface, and sea networks within a unified, intelligent operational model.
                </p>

                <p class="text-muted">
                    Our mission is to simplify even the most complex supply chain challenges—including dynamic market changes, fragmented visibility, and operational inefficiencies. We turn multi-stage logistics processes into a smooth, reliable, and fully transparent experience, while embedding sustainable and eco-efficient practices at every step.
                </p>

                <h5 class="fw-bold mt-4  ">The Pillars of Our Promise:</h5>
                <ul class="list-unstyled check-list">
                    <li><i class="fas fa-check-circle colorblue"></i> Reliability and accountability in every commitment.</li>
                    <li><i class="fas fa-check-circle colorblue"></i> Intelligent digital systems enabling real-time visibility and operational accuracy.</li>
                    <li><i class="fas fa-check-circle colorblue"></i> Transparent communication and clear, data-driven insights.</li>
                    <li><i class="fas fa-check-circle colorblue"></i> Sustainable practices integrated throughout all logistics operations.</li>
                </ul>
            </div>
            <div class="col-lg-6 img-fluid rounded-4 ">
                <img src="/assets/img/hero/turnatgoo0023.png" class="img-fluid rounded-4 shadow-lg" alt="Future of Multimodal Logistics India - Sustainable Supply Chain" style="border-radius: 1rem; box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);">
            </div>

        </div>
    </div>
</section>



<section class="why-choose-section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <span class="subtitle">Why Partner With Us</span>
                <h2 class="fw-bold fs-1">What Makes Us <span class="highlight">Different</span></h2>
                <p class="text">
                    We combine technology, nationwide reach, and international connectivity with unmatched expertise to deliver logistics solutions that empower businesses to scale confidently.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center shadow-sm h-100">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-network-wired feature-icon"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">Robust Domestic Network Connected</h5>
                    <p class="text">Connected hubs across continents for seamless trade movement.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center shadow-sm h-100">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-headset feature-icon"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">24/7 Support Team</h5>
                    <p class="text">Dedicated specialists ensuring reliable customer assistance globally.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center shadow-sm h-100">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-shield-alt feature-icon"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">Safe & Secure Handling</h5>
                    <p class="text">End-to-end protection of goods with comprehensive insured Conveyance.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center shadow-sm h-100">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-chart-line feature-icon"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">Data-Driven Operations</h5>
                    <p class="text">Real-time tracking and predictive analytics for maximum efficiency.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-5 mt-5">
            <div class="col-lg-6">
                <img src="/assets/img/hero/turantgoo01.png" class=" img-fluid rounded-4 shadow-lg" alt="TurantGo Digital Logistics Control Tower and Visibility Dashboard" style="border-radius: 1rem; box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);">
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold mb-3 fs-2">Empowering Logistics Through <span class="highlight">Technology</span></h3>
                <p class="text">
                    Our advanced proprietary systems seamlessly integrate all logistics modes, automate workflows, enhance delivery speed, and provide complete transparency at every stage—while supporting sustainable and eco-efficient operations.
                </p>
                <ul class="list-unstyled check-list">
                    <li><i class="fas fa-check-circle"></i> Real-Time Tracking Dashboard for complete visibility</li>
                    <li><i class="fas fa-check-circle"></i> Integrated End-to-End Multimodal Solutions</li>
                    <li><i class="fas fa-check-circle"></i> Certified Industry Standards and Compliance</li>
                </ul>
                <!-- <a href="#" class="btn btn-warning mt-4 fw-bold">Explore Our Platform</a> -->
            </div>

        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>
