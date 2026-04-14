<?php include('./includes/header.php'); ?>


<style>
    /* --- ELEGANCE AND ATTRACTION IMPROVEMENTS (Consistent Palette) --- */



    /* General Section Styling */
    .page-banner-wrap {
        padding: 8rem 0;
    }

    .page-heading h1 {
        font-size: 3.5rem;
        font-weight: 700;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
    }

    .section-title1 {
        font-size: 3rem;
        font-weight: 700;
        text-align: left;
        /* color: var(--primary-color); */
    }

    .section-subtitle {
        font-size: 1.2rem;
        /* color: var(--text-muted); */
    }


    /* 1. Road Freight Intro Section */
    .road-freight-intro-section {
        background-color: #ffffff;
        /* padding: 100px 0; */
    }

    .road-freight-intro-section img {
        border-radius: 1rem;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .road-freight-intro-section img:hover {
        transform: scale(1.02);
    }

    /* 2. Features Grid Section */
    .road-freight-features-section {
        background-color: var(--light-bg);
        /* padding: 100px 0; */
    }

    .feature-box {
        background-color: #ffffff;
        border-radius: 1rem;
        padding: 2rem;
        height: 100%;
        transition: all 0.3s ease;
        box-shadow: var(--shadow-subtle);
    }

    .feature-box:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-hover);
    }

    .feature-box i {
        font-size: 3rem;
        color: var(--secondary-color);
        /* Use accent color for main icons */
        margin-bottom: 1rem;
    }

    .feature-box h5 {
        color: var(--primary-color);
        font-weight: 600;
    }


    /* 3. Truck Types Section */
    .road-freight-types-section {
        background-color: #ffffff;
        /* padding: 100px 0; */
    }

    .truck-type-item h4 {
        color: var(--primary-color);
        font-weight: 700;
    }

    .truck-type-item i {
        font-size: 2.5rem;
        color: var(--secondary-color);
    }

    .list-item {
        color: var(--text-dark);
        font-size: 1.05rem;
        position: relative;
        padding-left: 1.5rem;
        list-style: none;
        margin-bottom: 0.5rem;
    }

    .list-item::before {
        content: "\f00c";
        /* Check mark */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: var(--primary-color);
        position: absolute;
        left: 0;
        top: 0;
    }

    /* Button Styling (Consistent) */
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        font-weight: 600;
        padding: 0.8rem 2.5rem;
        border-radius: 50px !important;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #003366;
        border-color: #003366;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 77, 153, 0.3);
    }

    /* Modal Styling */
    .modal-header h5 {
        color: var(--primary-color);
        font-weight: 700;
    }

    .modal-body h6 {
        color: var(--primary-color);
        margin-top: 1.5rem;
        font-weight: 600;
    }

    .modal-body ul li {
        margin-bottom: 0.5rem;
        position: relative;
        padding-left: 1.5rem;
        list-style: none;
    }

    .modal-body ul li::before {
        content: "\f058";
        /* Check circle */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: var(--secondary-color);
        position: absolute;
        left: 0;
        top: 0;
    }
</style>
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('/assets/img/hero/turantgoimage.png');">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Road Freight & Distribution</h1>
        </div>
    </div>
</div>

<section class="road-freight-intro-section">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="section-title1 mb-4">Flexible & Reliable Road Freight</h2>
                <p class="section-subtitle lead pb-1">
                    At TurantGo, every road shipment is executed with precision, speed, and complete operational control. From urgent B2B loads to heavy industrial cargo, our network ensures reliable, secure, and on-time delivery across every city, town, and industrial hub.
                </p>
                <!-- <p>
                    Powered by a modern fleet and an extensive national network, our road freight solutions are built for seamless movement and uninterrupted connectivity. With real-time GPS tracking and intelligent route planning, you get full visibility, accurate ETAs, and smooth last-mile execution.
                </p> -->
                <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle me-2 text-success"></i> Nationwide network for city-to-city and hub-to-hub movements</li>
                    <li><i class="fa fa-check-circle me-2 text-success"></i> Modern, high-capacity fleet with secure handling</li>
                    <li><i class="fa fa-check-circle me-2 text-success"></i> Real-time GPS visibility and proactive monitoring<li>
                    
                </ul>

              
            </div>

            <div class="col-lg-6">
                <img src="/assets/img/service/coverimage.jpg" class="img-fluid rounded-4 shadow-lg" alt="TurantGo Road Freight and Surface Transport Solutions India">
            </div>
        </div>

    </div>
</section>
<!-- 
<section class="road-freight-features-section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-3">Core Logistics Capabilities</h2>
            <p class="section-subtitle">
                Smart, secure, and sustainable solutions at every stage of your multimodal supply chain.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <i class="fas fa-route colorblue"></i>
                    <h5>Optimized Routing</h5>
                    <p class="text-muted">
                        AI-driven route planning ensures faster, fuel-efficient, and cost-effective deliveries across all transport modes.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <i class="fas fa-mobile-alt colorblue"></i>
                    <h5>Real-Time Tracking</h5>
                    <p class="text-muted">
                        24/7 live shipment monitoring with complete digital visibility across road, rail, and port networks.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <i class="fas fa-box-open colorblue"></i>
                    <h5>LCL & FCL Solutions</h5>
                    <p class="text-muted">
                        Flexible shipping options from partial loads to full containers, fully integrated across all transport modes.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <i class="fas fa-handshake colorblue"></i>
                    <h5>Cross-Border Expertise</h5>
                    <p class="text-muted">
                        Seamless customs management and reliable solutions for international multimodal shipments across neighboring countries.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section> -->


<section class="road-freight-types-section">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center">
                <img src="/assets/img/service/3.png" class="img-fluid rounded-4 shadow-lg" alt="Specialized Fleet for Heavy and Oversized Cargo Logistics India" style=" object-fit:cover; border-radius: 1rem; box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title1 mb-4">Specialized Fleet Solutions</h2>
                <p class="section-subtitle lead mb-4">
                    TurantGo offers a modern, eco-efficient fleet designed to handle diverse cargo needs safely, reliably, and sustainably across industries.
                </p>

                <!-- <div class="truck-type-item mb-5">
                    <i class="fas fa-thermometer-half me-3 colorblue"></i>
                    <h4 class="d-inline-block colorblue">Temperature-Controlled Cargo</h4>
                    <ul class="list-unstyled mt-2">
                        <li class="list-item ">Precision climate control for perishables, pharmaceuticals, and sensitive goods.</li>
                        <li class="list-item ">Fully compliant with sustainable cold chain logistics standards, minimizing environmental impact.</li>
                        <li class="list-item ">Integrated tracking for real-time monitoring and end-to-end visibility.</li>
                    </ul>
                </div> -->

                <div class="truck-type-item mb-5">
                    <i class="fas fa-truck-moving me-3 colorblue"></i>
                    <h4 class="d-inline-block colorblue">Heavy & Oversized Cargo</h4>
                    <ul class="list-unstyled mt-2">
                        <li class="list-item ">Flatbed and specialized trailers for large, bulky, or unconventional shipments.</li>
                        <li class="list-item ">Expert permitting, escort management, and route optimization for safe delivery.</li>
                        <li class="list-item ">Seamless multimodal integration with rail and port networks for end-to-end logistics.</li>
                    </ul>
                </div>
            </div>





        </div>
    </div>
</section>

<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Road Freight Consultation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Ready to optimize your road freight operations? Connect with TurantGo for a customized solution designed to meet your shipment volume, route, and cargo requirements efficiently and sustainably.
                </p>
                <h6>What We Need to Know</h6>
                <ul>
                    <li>Shipment type and volume (LTL or FTL)</li>
                    <li>Origin and destination locations</li>
                    <li>Nature of cargo (e.g., standard, temperature-controlled, hazardous, oversized)</li>
                    <li>Preferred delivery timelines or service requirements</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include('./includes/footer.php'); ?>
