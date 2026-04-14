<?php include('./includes/header.php'); ?>

<style>
    .info-box,
    .freight-services-section .card {
        border: none !important;
        /* Remove default card borders for a cleaner look */
        /* box-shadow: var(--shadow-subtle); */
        transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        border-radius: 12px !important;
        /* Slightly more rounded corners */
    }

    .freight-services-section .card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-hover);
    }

    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .info-box i {
        color: var(--primary-color);
        /* Color the icons */
    }

    /* 3. Button refinement */
    .btn-warning {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
        color: white;
        font-weight: 600;
        padding: 0.75rem 2rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #d89200;
        /* Darker secondary color on hover */
        border-color: #d89200;
        color: white;
    }

    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #003366;
        /* Darker primary color on hover */
        border-color: #003366;
    }


    /* 4. Animation (Keep the existing smooth animations) */
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .air-freight-section,
    .sea-freight-section,
    .freight-services-section {
        animation: fadeInUp 1s ease forwards;
    }

    /* 5. Sea Freight Section Overlay (For elegance on a background image) */
    .sea-freight-section {
        position: relative;
        background: url('/assets/img/service/fly_3.png') center/cover no-repeat;
    }

    .sea-freight-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(30, 42, 56, 0.75);
        /* Dark, subtle overlay */
        z-index: 1;
        pointer-events: none;
    }

    .sea-freight-section .container {
        position: relative;
        z-index: 2;
        /* Bring content above the overlay */
    }

    /* 6. Page Heading Refinement */
    .page-banner-wrap {
        padding: 8rem 0;
        /* More vertical space for a grander feel */
    }

    .page-heading h1 {
        font-size: 3.5rem;
        /* Larger, more impactful title */
        font-weight: 700;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
    }

    /* 7. Image Styling */
    .air-freight-section img {
        transition: transform 0.5s ease;
    }

    .air-freight-section img:hover {
        transform: scale(1.02);
        /* Subtle zoom on hover for polish */
    }

    /* 8. List Icons for elegance */
    .sea-freight-section ul li i {
        color: var(--secondary-color);
        /* Highlight checkmarks with accent color */
    }
</style>
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('/assets/img/service/fly_banner.png');">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Air Freight</h1>
        </div>
    </div>
</div>
<section class="air-freight-section py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <h2 class="fw-bold display-5 mb-4">Air Freight Services</h2>
                <p class="lead pb-2">
                    At TurantGo, air cargo becomes a high-velocity engine that drives your supply chain with unmatched speed, precision, and reliability. From critical industrial shipments to urgent B2B deliveries and high-value consignments, our air freight solutions are engineered for performance at every step. We combine rapid transit times with stringent safety standards to ensure your goods move faster, safer, and exactly on schedule. With TurantGo, every shipment becomes a competitive advantage—delivered with power, accuracy, and total confidence.
                </p>
               

                <div class="row g-4 mt-4">
                    <div class="col-6">
                        <div class="info-box bg-white p-4 text-center">
                            <i class="fas fa-stopwatch fa-3x mb-2 colorblue" title="Fast Air Freight Cargo Delivery"></i>
                            <h6 class="fw-bold mt-2">Fast Delivery</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-white p-4 text-center">
                            <i class="fas fa-globe fa-3x mb-2 colorblue" title="Global Air Logistics Reach"></i>
                            <h6 class="fw-bold mt-2">Global Reach</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-white p-4 text-center">
                            <i class="fas fa-shield-alt fa-3x mb-2 colorblue" title="Secure Air Cargo Handling"></i>
                            <h6 class="fw-bold mt-2">Secure Handling</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-white p-4 text-center">
                            <i class="fas fa-chart-line fa-3x mb-2 colorblue" title="Real-Time Air Shipment Tracking"></i>
                            <h6 class="fw-bold mt-2">Real-Time Tracking</h6>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 text-center">
                <img src="/assets/img/service/fly_2.png" class="img-fluid rounded-4 shadow-lg" alt="TurantGo Air Freight Services - Fast International and Domestic Cargo India" style=" object-fit:cover; border-radius: 1rem; box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);">
            </div>

        </div>
    </div>
</section>
<section class="sea-freight-section py-5 text-white">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="fw-bold display-5 mb-4">Air Freight Services</h2>
                <p class="lead">
                    TurantGo moves urgent, high-value, and sensitive cargo efficiently using air freight. We handle every step—from pickup to delivery—ensuring speed, security, and integration with road and rail for smooth multimodal operations.
                    Our team ensures full visibility, seamless handling, and compliance, supporting a reliable and sustainable supply chain.
                </p>
                <ul class="list-unstyled mt-4 fs-5">
                    <li><i class="fas fa-check-circle me-2"></i> Plan and execute optimized air routes for fast delivery</li>
                    <li><i class="fas fa-check-circle me-2"></i> Handle sensitive and high-value cargo safely and sustainably</li>
                    <li><i class="fas fa-check-circle me-2"></i> Provide real-time tracking and digital documentation for every shipment</li>
                </ul>
                <!-- <a href="#" class="btn btn-warning mt-4">Request a Quote</a> -->
            </div>

        </div>
</section>

<!-- <section class="freight-services-section py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6 mb-3">Integrated Global Freight Services</h2> <p class="text-muted fs-5">Comprehensive solutions across air, sea, rail, and road to ensure your cargo moves efficiently and safely.</p>
        </div>

        <div class="row g-4 justify-content-center"> <div class="col-sm-6 col-lg-3">
                <div class="card bg-white h-100 text-center p-3">
                    <div class="card-img-top-wrap overflow-hidden mb-3">
                        <img src="/assets/img/about/cover_image_23.png" class="img-fluid rounded-3" alt="Air Freight">
                    </div>
                    <div class="card-body pt-0">
                        <h5 class="card-title fw-bold mb-3">Air Freight</h5>
                        <p class="card-text text-muted">
                            Fast and reliable solutions for urgent, high-value, and time-sensitive cargo worldwide.
                        </p>
                        <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#airFreightModal">
                            Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card bg-white h-100 text-center p-3">
                    <div class="card-img-top-wrap overflow-hidden mb-3">
                        <img src="/assets/img/about/cover_image_29.png" class="img-fluid rounded-3" alt="Sea Freight">
                    </div>
                    <div class="card-body pt-0">
                        <h5 class="card-title fw-bold mb-3">Ocean Freight</h5>
                        <p class="card-text text-muted">
                            Cost-effective shipping across global ports with secure container handling and real-time tracking.
                        </p>
                        <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#seaFreightModal">
                            Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card bg-white h-100 text-center p-3">
                    <div class="card-img-top-wrap overflow-hidden mb-3">
                        <img src="/assets/img/about/cover_image_10.png" class="img-fluid rounded-3" alt="Rail Freight">
                    </div>
                    <div class="card-body pt-0">
                        <h5 class="card-title fw-bold mb-3">Rail Freight</h5>
                        <p class="card-text text-muted">
                            High-capacity, reliable rail freight across strategic corridors for secure and timely delivery.
                        </p>
                        <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#railFreightModal">
                            Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card bg-white h-100 text-center p-3">
                    <div class="card-img-top-wrap overflow-hidden mb-3">
                        <img src="/assets/img/about/cover_image_10.png" class="img-fluid rounded-3" alt="Road Freight">
                    </div>
                    <div class="card-body pt-0">
                        <h5 class="card-title fw-bold mb-3">Road Freight</h5>
                        <p class="card-text text-muted">
                            Flexible last-mile and regional delivery solutions with optimized routes and real-time monitoring.
                        </p>
                        <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#roadFreightModal">
                            Details
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->

<div class="modal fade" id="airFreightModal" tabindex="-1" aria-labelledby="airFreightModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="airFreightModalLabel">Air Freight Solutions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Air Freight is one of the fastest and most reliable forms of cargo Conveyanceation. TurantGo Air Freight solutions
                    meet the needs of time-sensitive, high-value shipments including electronics, pharmaceuticals, and e-commerce.
                </p>
                <ul>
                    <li><i class="fas fa-plane me-2 text-primary"></i> Fastest delivery timelines for urgent cargo</li>
                    <li><i class="fas fa-network-wired me-2 text-primary"></i> Global coverage with reliable airline partnerships</li>
                    <li><i class="fas fa-desktop me-2 text-primary"></i> Real-time tracking and digital visibility</li>
                    <li><i class="fas fa-lock me-2 text-primary"></i> High security and controlled cargo handling</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="seaFreightModal" tabindex="-1" aria-labelledby="seaFreightModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="seaFreightModalLabel">Ocean Freight Solutions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    TurantGo Ocean Freight ensures safe and cost-effective cargo movement across global ports. Full visibility, secure
                    container handling, and optimized shipping routes help streamline international logistics.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="railFreightModal" tabindex="-1" aria-labelledby="railFreightModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="railFreightModalLabel">Rail Freight Solutions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Rail Freight provides high-capacity, reliable Conveyance across strategic corridors. TurantGo ensures secure, timely,
                    and cost-effective rail logistics for businesses across industries.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="roadFreightModal" tabindex="-1" aria-labelledby="roadFreightModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="roadFreightModalLabel">Road Freight Solutions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Road Freight provides flexible last-mile and regional delivery solutions. Turant Go uses optimized routes, real-time
                    tracking, and secure handling to ensure cargo reaches its destination safely and efficiently.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include('./includes/footer.php'); ?>
