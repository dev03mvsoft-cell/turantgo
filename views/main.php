<?php include('./includes/header.php'); ?>
<?php include('hero.php'); ?>
<style>
    /* --- General Styles (Kept from original) --- */
    .services-grid {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: nowrap;
    }



    @media (max-width: 992px) {
        .service-card {
            flex: 1 1 calc(50% - 20px);
        }

        /* 2 per row */
    }

    @media (max-width: 576px) {
        .service-card {
            flex: 1 1 100%;
        }

        /* 1 per row */
    }

    .image-modal {
        display: none;
        position: fixed;
        z-index: 99999;
        padding-top: 40px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgba(0, 0, 0, 0.9);
    }

    .image-modal img {
        margin: auto;
        display: block;
        max-width: 90%;
        max-height: 90%;
        border-radius: 12px;
    }

    .close-modal {
        position: absolute;
        top: 10px;
        right: 40px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    .close-modal:hover {
        color: #ff9800;
    }

    .swiper-slide {
        background-color: #2a2a2a;
        border-radius: 15px;
        overflow: hidden;
    }

    .about-img {
        max-width: 80%;
        margin: 0 auto;
    }

    @media (max-width: 991px) {
        .about-img {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 15px;
        }

        .header-section h1 {
            font-size: 1.75rem !important;
        }

        .header-section h2 {
            font-size: 1.25rem !important;
        }

        .industry-section p {
            font-size: 0.95rem;
        }

        .our-service-solution {
            padding: 40px 10px !important;
        }

        .our-service-solution .section-title h1 {
            font-size: 1.6rem !important;
        }
    }

    .about-img img {
        border-radius: 1.5rem;
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        width: 100%;
        height: auto;
        transition: all 0.5s ease;
    }

    .about-img img:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .block-contents .section-title {
        position: relative;
        margin-top: -10px;
    }

    .block-contents .section-title h2 {
        font-size: 38px;
        font-weight: 800;
        line-height: 1.2;
    }

    @media (max-width: 576px) {
        .block-contents .section-title h2 {
            font-size: 28px;
        }

        .about-info-contents {
            padding: 25px !important;
        }

        .about-info-contents p {
            font-size: 1rem !important;
        }
    }

    .about-info-contents {
        background: #f7f9fb;
        padding: 40px;
        border-radius: 10px;
        margin-top: 35px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
    }

    .about-info-contents p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }

    .about-info-contents p:last-child {
        margin-bottom: 0;
    }

    .section-title h2 {
        font-size: 42px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: -1px;
    }

    .section-title h5 {
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 5px;
    }
</style>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <div class="about-img">
                    <img src="/assets/img/about/aboutturantgo.png" alt="TurantGo Multimodal Logistics Solutions - Sustainable Supply Chain India">
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-4">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft relative">about</h5>
                        <span style="color:green">Pioneering a Sustainable Supply Chain</span>
                        <h2>TurantGo <span style="color:#003e6ef6;font-size:33px;">Multimodal Solutions</span></h2>
                    </div>
                </div>
                <div class="about-info-contents">
                    <p>
                        TurantGo is a next-generation logistics partner building a seamless, technology-driven supply chain ecosystem. Through integrated air, rail, road, and sea networks, we deliver speed, transparency, and efficiency with a strong focus on sustainable, green logistics.
                    </p>
                    <p>
                        We engineer intelligent logistics flows that simplify complexity and ensure predictable, high-performance outcomes using advanced infrastructure and real-time digital visibility.
                    </p>
                </div>

                <!-- <div class="company-ceo d-flex align-items-center">
        <div class="ceo-info">
            <h5>[Insert Head's Name Here]</h5>
            <span>Head Of Company</span>
        </div>
        </div> -->
            </div>
        </div>
    </div>
</section>

<section class="industry-section pb-5 position-relative overflow-hidden">
    <!-- Background Decor -->
    <div class="bg-glow-spot spot-1"></div>
    <div class="bg-glow-spot spot-2"></div>

    <div class="container container-industry">
        <!-- Header -->
        <div class="header-section text-center mb-5">
            <h2 class="fw-bold display-4">
                <span style="color:#003e6ef6;">TurantGo Multimodal</span> Logistic Solutions
            </h2>

            <h2 class="fw-semibold mt-2">
                Seamless End-to-End Supply Chain Excellence for
                All Sectors
            </h2>

            <p class="mt-3 description-text">
                Explore our industry-focused logistics solutions designed to accelerate business performance through
                intelligent multimodal connectivity and a modern, visibility-driven supply chain ecosystem.
            </p>
        </div>

        <!-- First Row -->
        <div class="row justify-content-center g-4 mb-4">

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/service/greeen.jpg"
                        alt="Sustainable Green Energy Logistics and Transport India"
                        title="Green Energy Logistics Solutions"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        Green Energy
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/about/cover_image_27.png"
                        alt="Cold Chain Logistics Services for Perishables and Pharma India"
                        title="Temperature Controlled Logistics India"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        Cold Chain
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/service/avatiion.png"
                        alt="Aviation Defense and Automotive Logistics Excellence"
                        title="Specialized Industrial Logistics"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        Aviation & Defense
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/heroservice/food.png"
                        alt="Retail and FMCG Consumer Goods Supply Chain Management"
                        title="Retail Logistics Solutions India"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        Retail & FMCG
                    </div>
                </div>
            </div>

        </div>

        <!-- Second Row -->
        <div class="row justify-content-center g-4">

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/about/cover_image_4.png"
                        alt="Industrial Cargo and Bulk Logistics Solutions India"
                        title="Industrial Logistics Services"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        Industrial Goods
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/about/cover_image_3.png"
                        alt="Safe Pharmaceutical and Healthcare Logistics India"
                        title="Healthcare Supply Chain Management"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        Pharmaceuticals
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/main/main_electronic.png"
                        alt="Secure Electronics and High Value Goods Logistics"
                        title="Electronics Supply Chain India"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        Electronics
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                <div class="card-img-container w-100">
                    <img src="/assets/img/about/cover_image_6.png"
                        alt="E-commerce Fulfillment and D2C Logistics India"
                        title="E-commerce Supply Chain Solutions"
                        class="img-fluid">
                    <div class="card-text-overlay">
                        E-commerce
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="our-service-solution">
    <div class="container-fluid px-md-5">
        <div class="section-title">
            <span>Our Services</span>
            <h1>End-to-End Multimodal Logistics Solutions</h1>
            <p>Empowering your supply chain with integrated, technology-driven services that deliver speed, transparency, and reliability at every stage.</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Service 1: Multimodal Solutions -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-route" title="Multimodal Transport Solutions India"></i>
                    </div>
                    <h3>Multimodal Solutions</h3>
                    <div class="subtitle">Air | Rail | Surface | Sea</div>
                    <p>
                        A fully integrated system synchronizing air, rail, surface, and sea networks for full visibility.
                    </p>
                    <ul class="service-features">
                        <li>End-to-End Integration</li>
                        <li>Real-Time Visibility</li>
                        <li>Streamlined Operations</li>
                        <li>Optimized Routing</li>
                    </ul>
                    <a href="/services/air-freight" class="learn-more">Explore Solution <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 2: Warehousing -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-warehouse" title="Smart Warehousing and Storage Solutions India"></i>
                    </div>
                    <h3>Smart Warehousing</h3>
                    <div class="subtitle">Secure & Tech-Enabled</div>
                    <p>
                        State-of-the-art storage with advanced technology and precise inventory management.
                    </p>
                    <ul class="service-features">
                        <li>Strategic Facilities</li>
                        <li>Temp-Controlled Storage</li>
                        <li>Digital Inventory</li>
                        <li>Faster Hub Access</li>
                    </ul>
                    <a href="/services/warehousing" class="learn-more">Explore Solution <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 3: 3PL & 4PL -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-network-wired" title="3PL and 4PL Supply Chain Management Services"></i>
                    </div>
                    <h3>3PL & 4PL Solutions</h3>
                    <div class="subtitle">Strategic Management</div>
                    <p>
                        Comprehensive logistics services aligning operations with strategic supply chain goals.
                    </p>
                    <ul class="service-features">
                        <li>Centralized Oversight</li>
                        <li>Multi-Vendor Integration</li>
                        <li>Demand Planning</li>
                        <li>Advanced Analytics</li>
                    </ul>
                    <a href="/services/third-party-fourth-party" class="learn-more">Explore Solution <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 4: First/Last Mile -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Direct Logistics</h3>
                    <div class="subtitle">First | Last Mile</div>
                    <p>
                        Seamless management of pickup and delivery operations with high accuracy and dependable timelines.
                    </p>
                    <ul class="service-features">
                        <li>Reliable Pickups</li>
                        <li>Optimized Last-Mile</li>
                        <li>Digital POD Support</li>
                        <li>Real-Time Tracking</li>
                    </ul>
                    <a href="/services/first-mile-and-last-mile" class="learn-more">Explore Solution <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Old modal removed as we now use Magnific Popup for a better experience -->
<section class="case-studies-section section-padding">
    <div class="container text-center">
        <div class="section-title mb-5">
            <span class="subtitle">Experience Excellence</span>
            <h1 class="text-white">Our Field <span class="highlight">Gallery</span></h1>
            <p class="text-light opacity-75">A visual journey through our multimodal operations, precision warehousing, and seamless supply chain movements.</p>
        </div>

        <div class="gallery-wrapper popup-gallery">
            <div class="swiper my-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg'];
                    foreach ($images as $img): ?>
                        <div class="swiper-slide">
                            <a href="/assets/img/gallery/<?php echo $img; ?>" class="gallery-card">
                                <div class="card-image-container">
                                    <img src="/assets/img/gallery/<?php echo $img; ?>" alt="TurantGo Logistics Operation" loading="lazy">
                                    <div class="card-hover-overlay">
                                        <!-- <i class="fas fa-eye"></i> -->
                                        <span>View Larger</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-prev gallery-nav"></div>
                <div class="swiper-button-next gallery-nav"></div>

                <!-- Pagination -->
                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>
    </div>
</section>



<!-- <section class="funfact-countdown-wrapper fix">
    <div class="container-fluid p-0">
        <div class="row no-padding">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-funfact-item">
                    <div class="icon">
                        <img src="assets/img/icons/map-classic.png" alt="">
                    </div>
                    <div class="countdown">
                        <h2>8700</h2>
                        <span>All Over The World</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-funfact-item">
                    <div class="icon">
                        <img src="assets/img/icons/plan.png" alt="">
                    </div>
                    <div class="countdown">
                        <h2>5644</h2>
                        <span>All Over The World</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-funfact-item">
                    <div class="icon">
                        <img src="assets/img/icons/box.png" alt="">
                    </div>
                    <div class="countdown">
                        <h2>2390</h2>
                        <span>All Over The World</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-funfact-item">
                    <div class="icon">
                        <img src="assets/img/icons/cup.png" alt="">
                    </div>
                    <div class="countdown">
                        <h2>1150</h2>
                        <span>All Over The World</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="who-we-are" class="who-we-are-section">
    <div class="container">

        <header class="section-header">
            <div class="intro-text">
                <h3>Who We Are</h3>
                <p class="tagline">Empowering businesses with unified multimodal solutions and intelligent, tech-driven supply chain architecture.</p>
            </div>

        </header>

        <div class="intro-block">
            <div class="intro-text">
                <h3>Our Story</h3>
                <p class="pb-2">
                    TurantGo was founded with a transformative vision — to unify India’s diverse logistics channels into one seamless, technology-driven, and green-powered ecosystem.
                    What began as a mission to simplify logistics complexities has grown into a robust multimodal network integrating
                    <strong>air, rail, surface, and sea</strong> operations under a synchronized and intelligent management structure.
                </p>

                <p>
                    Over the years, TurantGo has built a reputation for precision, transparency, and sustainable reliability.
                    Today, we empower industries with faster transit, optimized planning, and real-time digital visibility across every movement — from origin to eco-efficient last-mile delivery.
                </p>

                <!-- <div class="separator"></div> -->


            </div>

            <div class="intro-image-container">
                <img src="/assets/img/about/turantgo0012.png" alt="TurantGo Operations Team" loading="lazy">
            </div>
        </div>

        <!-- <div class="mvv-block">
            <h3>Mission & Core Values</h3>
            <div class="mvv-grid">

                <div class="mvv-item">
                    <h4>Our Mission</h4>
                    <p>
                        To enable businesses with intelligent, multimodal logistics solutions that
                        deliver speed, transparency, and operational excellence across every stage of their supply chain.
                    </p>
                </div>

                <div class="mvv-item">
                    <h4>Our Vision</h4>
                    <p>
                        To become India’s most trusted multimodal logistics ecosystem powered by technology,
                        innovation, and continuous process optimization.
                    </p>
                </div>

                <div class="mvv-item">
                    <h4>Our Core Values</h4>
                    <ul>
                        <li>Reliability & Accountability</li>
                        <li>Innovation through Technology</li>
                        <li>Transparent & Ethical Operations</li>
                        <li>Customer-First Approach</li>
                        <li>Long-Term Strategic Partnerships</li>
                    </ul>
                </div>
            </div>
        </div> -->


    </div>
</section>

<section class="facts-section">
    <div class="facts-container">

        <div class="featured-block">
            <div class="title-card">
                <h2 class="colorblue">Driving the Future of Logistics <span class="colorgreen">Through Innovation</span></h2>
            </div>
            <div class="image-card">
                <img src="/assets/img/about/indian_electric_container_truck.png" alt="Company Logistics Fleet" loading="lazy">
                <div class="cover-text">
                    Innovating Logistics <br> for a Faster, Greener Tomorrow
                </div>
            </div>
        </div>

        <div class="facts-grid">

            <div class="fact-card">
                <div class="icon-circle">
                    <span class="icon" role="img" aria-label="Star">⭐</span>
                </div>
                <p class="fact-detail">
                    <strong>Leading Logistics</strong><br>Solutions Provider
                </p>
            </div>

            <div class="fact-card">
                <div class="icon-circle">
                    <span class="icon" role="img" aria-label="Currency Symbol">📦</span>
                </div>
                <p class="fact-detail">
                    <strong>10,000+ Shipments</strong><br>Handled Monthly
                </p>
            </div>

            <div class="fact-card">
                <div class="icon-circle">
                    <span class="icon" role="img" aria-label="Group of People">👥</span>
                </div>
                <p class="fact-detail">
                    <strong>500+ Dedicated</strong><br>Logistics Professionals
                </p>
            </div>

            <div class="fact-card">
                <div class="icon-circle">
                    <span class="icon" role="img" aria-label="Building">🌐</span>
                </div>
                <p class="fact-detail">
                    <strong>150+ Service</strong><br>Touchpoints Across India
                </p>
            </div>

        </div>

    </div>
</section>

<section class="contact-section theme-bg bg-cover section-padding" style="background-image: url('/assets/img/about/cover_image_20.png');">
    <div class="container">
        <div class="row">

            <!-- LEFT INFO -->
            <div class="col-xl-5 col-12">
                <div class="block-contents mb-20 pr-30">
                    <div class="section-title">
                        <h5 class="textleft">Contact</h5>
                        <span>Get in Touch</span>
                        <h2>Contact <span>Us</span></h2>
                        <p class="text-white">
                            Have questions about shipments, multimodal solutions, or partnership opportunities?
                            Our team is here to support you with fast, reliable, and expert assistance.
                        </p>
                    </div>
                </div>

                <div class="row me-xl-5 text-white">

                    <div class="col-sm-6">
                        <div class="single-request-element">
                            <div class="icon"><i class="fal fa-phone fa-flip-horizontal"></i></div>
                            <h6>Phone Support</h6>
                            <p>+91 7082799059</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="single-request-element">
                            <div class="icon"><i class="fal fa-envelope"></i></div>
                            <h6>Email Support</h6>
                            <p>info@turantgo.com</p>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="single-request-element">
                            <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                            <h6>Head Office</h6>
                            <p>TurantGo Multimodal Solutions Pvt Ltd<br>
                                H.No. 1642, ward no 21, Sheetal Nagar, Bagh Wali Gali, Jhajjar Road, Rohtak, 124001
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT CONTACT FORM -->
            <div class="col-xl-7 col-12">
                <div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3">
                    <h4>Send Us a Message</h4>

                    <div class="request-quote-form">
                        <form action="/handlers/contact_handler.php" method="POST" id="contact-form">

                            <!-- Honeypot fields -->
                            <input type="text" name="website" style="display:none;">
                            <input type="text" name="email_confirm" style="display:none;">
                            <input type="hidden" name="form_time" value="<?php echo time(); ?>">

                            <!-- reCAPTCHA v3 Token -->
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                            <div class="row">

                                <div class="col-sm-6 col-12">
                                    <input type="text" name="name" placeholder="Full Name" required>
                                </div>

                                <div class="col-sm-6 col-12">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-sm-6 col-12">
                                    <input type="text" name="phone" placeholder="Phone Number" required>
                                </div>

                                <div class="col-sm-6 col-12">
                                    <select name="service" class="wide" required>
                                        <option value="">Select Service</option>
                                        <option>Multimodal Logistics</option>
                                        <option>Warehousing</option>
                                        <option>3PL & 4PL Management</option>
                                        <option>First Mile Delivery</option>
                                        <option>Last Mile Delivery</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-12">
                                    <textarea name="message" placeholder="Your Message..." rows="5"
                                        style="border:1px solid #666666;width:100%;padding:15px;" required></textarea>
                                </div>

                                <div class="col-sm-12">
                                    <input type="submit" id="submit-btn" class="theme-btn" value="Send Message">
                                </div>

                                <div class="text-center mt-2">
                                    <small style="font-size:11px;">
                                        This site is protected by reCAPTCHA and the Google
                                        <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a>
                                        &
                                        <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                                    </small>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="cta-wrapper section-padding style-2 bg-cover" style="background-image: url('assets/img/about/cover_image_21.png')">
    <div class="container">
        <div class="col-lg-8 offset-lg-2 col-12 text-center">
            <div class="cta-contents">
                <img src="/assets/img/team/logo.png" alt="transland" style="background-color: white;padding:15px;border-radius:10px;">
                <h1 class="text-white mt-4 mt-md-5 mb-4" style="font-weight: bold;color:green">
                    Driving a Greener & Smarter Logistics Future
                </h1>
                <!-- <div class=" p-3 rounded bg-body-opacity-100 " style="background-color: #ffffffed;">
                    <p class="text  fs-5 fw-bold shadow-lg rounded bg-body-opacity-100">
                        TurantGo’s multimodal air–rail–road–sea ecosystem reduces emissions, improves efficiency,
                        and supports a safer, sustainable supply chain.
                    </p>

                </div> -->

            </div>
        </div>
    </div>
</section>

<section class="brand-showcase-funfact-wrapper section-padding bg-contain bg-center wow fadeInUp" style="background-image: url('/assets/img/dot_map.png')" data-wow-delay=".3s">
    <div class="container">
        <div class="col-12 text-center mb-20 mtm-20">
            <div class="mask-outline bg-center" style="background-image: url('assets/img/about/cover_image_20.png')">
                <h1>20,8700</h1>
            </div>
            <h6 class="mt-4">All-over delivery done by our team</h6>
        </div>

        <!-- <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4 col-lg-3 col-6">
                <div class="single-brand-logo">
                    <img src="/assets/img/clients/tata.png" alt="Tata Logo">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
                <div class="single-brand-logo">
                    <img src="/assets/img/clients/awl.png" alt="AWL Agri Business Logo">
                </div>
            </div>
        </div> -->
    </div>
</section>

<section class="faq-wrapper section-padding section-bg">
    <div class="container">
        <div class="col-xl-6">
            <div class="section-title-2">
                <span style="color:red">faq</span>
                <h1>Some Question</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 pe-lg-5">
                <div class="faq-content">
                    <div class="faq-accordion mtm-20">
                        <div class="accordion" id="accordion">

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                        What is TurantGo Multimodal Solutions?
                                    </button>
                                </h4>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        TurantGo is a next-generation logistics partner specializing in creating a seamless, technology-driven ecosystem for the supply chain. We integrate air, rail, surface, and sea networks under a unified management structure to maximize efficiency and visibility.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                        What does 'Multimodal' mean in your context?
                                    </button>
                                </h4>
                                <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        It means we combine multiple modes of Conveyance (air, rail, road, and sea) for a single shipment under one contract. Our competitive advantage lies in synchronized coordination and seamless transition between modes to ensure speed and cost efficiency.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                        How does TurantGo ensure transparency and visibility?
                                    </button>
                                </h4>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        We utilize a Digital Monitoring Platform supported by IoT sensors and automated data integration across all logistics nodes, enabling real-time tracking, notifications, and full visibility from the point of origin to the final destination.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                        Do you offer only multimodal services, or can I book a single-mode Conveyance?
                                    </button>
                                </h4>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        While our core expertise lies in multimodal integration, we also offer dedicated single-mode services such as FTL road Conveyance or air freight, along with warehousing and First Mile | Last Mile (FMLM) service options.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                        What is the difference between your 3PL and 4PL solutions?
                                    </button>
                                </h4>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        3PL services focus on operational execution such as Conveyanceation and warehousing. 4PL provides end-to-end strategic oversight, technology integration, and multi-vendor coordination as a single control point to align logistics with business objectives.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                        How do you handle sensitive or temperature-controlled goods?
                                    </button>
                                </h4>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        We provide temperature-controlled storage and Conveyanceation using reefer-enabled vehicles and monitored containers to maintain strict compliance and quality for sensitive cargo such as pharmaceuticals and perishable goods.
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                        How can I request a quote?
                                    </button>
                                </h4>
                                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        You can request a quote by clicking the “Request a Quote” button on our Homepage or filling out the Enquiry Form on our Contact Page. A specialist will contact you to understand your requirements and prepare a customized proposal.
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="featured-video-wrapper text-center d-flex justify-content-center align-items-center bg-cover" style="background-image: url('/assets/img/main/faq.png'); height: 100%;">
                    <!-- <div class="video-play-btn">
                        <a href="/assets/img/about/warehouse.mp4" class="popup-video play-video"><i class="fas fa-play"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Swiper initialization (Ensuring it matches the new HTML)
    // Using 'load' event to ensure Swiper JS from footer.php is fully loaded
    window.addEventListener('load', function() {
        new Swiper(".my-swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    });
</script>

<?php include('./includes/footer.php'); ?>
