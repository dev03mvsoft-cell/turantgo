<?php include('./includes/header.php'); ?>




<style>
    /* --- ELEGANCE AND ATTRACTION IMPROVEMENTS (Consistent with previous page) --- */

    :root {
        --primary-color: #f07800ff;
        /* Deep, professional Blue (Trust) */
        --secondary-color: #004d99;
        /* Rich Gold/Orange (Excellence) */
        --light-bg: #f5f8fa;
        /* Soft background for sections */

    }

    /* Override Section Colors and Backgrounds */
    .rail-freight-modern-section {
        background: var(--light-bg);
        /* Use the soft, consistent light background */
        padding: 100px 0;
        /* Increased vertical space for elegance */
    }

    .rail-freight-modern-section h2,
    .rail-freight-card-section h2,
    .modal-header h5 {
        color: var(--primary-color);
        font-weight: 700;
        line-height: 1.2;
        /* Better readability */
    }

    .rail-freight-modern-section h2 {
        font-size: 3rem;
        /* Larger, more impactful heading */
    }

    .rail-freight-modern-section p,
    .rail-freight-modern-section h5 {
        /* color: var(--text-dark); */
        font-size: 1.15rem;
        /* Slightly larger text for elegance */
    }

    .rail-freight-modern-section h5 {
        color: var(--secondary-color);
        /* Highlight subheadings with accent color */
        font-weight: 600;
    }


    /* Image Styling Refinement */
    .rail-freight-modern-section .image-wrapper {
        height: 100%;
        min-height: 100%;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .rail-freight-modern-section .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .rail-freight-modern-section .image-wrapper:hover img {
        transform: scale(1.05);
    }

    /* Clean up the overlay shape (it was conflicting with the elegant aesthetic) */
    .rail-freight-modern-section .overlay-shape {
        display: none;
    }

    /* Button Styling (Consistent with previous page) */
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        font-weight: 600;
        padding: 0.75rem 2rem;
        border-radius: 50px !important;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #003366;
        border-color: #003366;
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0, 77, 153, 0.3);
    }

    .btn-secondary {
        border-radius: 50px;
    }


    /* Card Section Refinement */
    .rail-freight-card-section {
        background: #ffffff;
        padding: 100px 0;
    }

    .rail-freight-card-section .card {
        border: 1px solid #eee;
        /* Add a subtle border */
        border-radius: 1rem;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        box-shadow: var(--shadow-subtle);
    }

    .rail-freight-card-section .card:hover {
        transform: translateY(-8px);
        /* Less aggressive lift for elegance */
        box-shadow: var(--shadow-hover);
    }

    .rail-freight-card-section .card img {
        border-bottom: 5px solid var(--secondary-color);
        /* Accent color border */
        border-radius: 1rem 1rem 0 0;
        /* Match card radius */
    }

    .rail-freight-card-section .card-title {
        color: var(--primary-color);
        font-weight: 600;
    }

    .rail-freight-card-section .card-text {
        color: var(--text-muted);
        min-height: 4.5rem;
        /* text-align: justify; */
        /* Ensure consistent card height for a cleaner row */
    }

    .rail-freight-card-section .card-body {
        padding: 2rem 1.5rem;
        /* Increased inner padding */
    }

    /* List and Modal Styling */
    .modal-body h6 {
        color: var(--primary-color);
        font-weight: 700;
        margin-top: 1.5rem;
    }

    .modal-body ul li {
        list-style: none;
        /* Remove default list style */
        position: relative;
        padding-left: 1.5rem;
        font-size: 1.05rem;
        /* color: var(--text-dark); */
        margin-bottom: 0.75rem;
    }

    .modal-body ul li::before {
        content: "\f058";
        /* Font Awesome check circle icon */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: var(--secondary-color);
        /* Use accent color for checkmarks */
        position: absolute;
        left: 0;
        top: 0;
    }
</style>
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('/assets/img/service/rail_image_1.png'); padding: 8rem 0;">
    <div class="container">
        <div class="page-heading text-white">
            <h1 style="font-size: 3.5rem; font-weight: 700; text-shadow: 0 3px 6px rgba(0,0,0,0.4);">Rail Services</h1>
        </div>
    </div>
</div>
<section class="rail-freight-modern-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="image-wrapper position-relative">
                    <img src="/assets/img/hero/turnatgoo012.png" alt="TurantGo Rail Freight Logistics - Industrial Rail Transport India">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Smarter Rail Freight Logistics India</h2>

                <p class="lead pb-1">
                    At TurantGo, we don’t just move cargo — we dominate the rail logistics landscape with precision, power, and absolute reliability.
                </p>

                <p class="my-2">
                    Our high-capacity rail solutions are engineered for industries where speed isn’t optional — it’s the backbone of success.
                </p>

                <p class="lead pb-1">
                    Whether you're moving bulk commodities, industrial goods, high-value materials, or specialized cargo, TurantGo gives you a logistics advantage your competitors can’t match.
                </p>

                <h5 class="mt-4">Why Leading Businesses Choose TurantGo</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-route me-2 text-secondary"></i> Unbreakable Reliability: Consistent schedules and predictable transit — every single time..</li>
                    <li class="mb-2"><i class="fas fa-shield-alt me-2 text-secondary"></i> High-Speed Movement: Faster trains, optimized routes, and zero idle time.</li>
                    <li class="mb-2"><i class="fas fa-sync-alt me-2 text-secondary"></i> Industrial-Grade Handling: Designed for heavy, dense, time-sensitive, and mission-critical cargo.</li>
                    <li class="mb-2"><i class="fas fa-sync-alt me-2 text-secondary"></i> 24×7 Live Tracking: Total visibility powered by advanced GPS, analytics, and control tower monitoring.</li>
                    <li class="mb-2"><i class="fas fa-sync-alt me-2 text-secondary"></i> Seamless Multimodal Integration: Smooth connection to road, air, and port systems for end-to-end fulfillment.</li>
                </ul>


                <a href="#railFreightModal" class="btn btn-primary mt-4" data-bs-toggle="modal">Explore Rail Capabilities</a>
            </div>


        </div>
    </div>
</section>

<section class="rail-freight-card-section">
    <div class="container text-center">
        <h2 class="mb-3 display-6">Specialized Rail Services</h2>
        <p class=" mb-5 fs-5">Offering tailored solutions for maximum efficiency and compliance across key industries.</p>
        <div class="row g-4 justify-content-center">

            <div class="col-sm-6 col-lg-4">
                <div class="card shadow-sm h-100">
                    <img src="/assets/img/service/33.png" class="card-img-top" alt="Container and IR Rail Freight Services">
                    <div class="card-body">
                        <h5 class="card-title">Container / IR Rail Freight</h5>
                        <p class="card-text">
                            Reliable, scheduled rail services for full trainloads (FTL) and general cargo, focused on maximizing efficiency, reducing costs, and supporting eco-friendly multimodal operations.
                        </p>
                        <!-- <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#railFreightModal">Read More</button> -->
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card shadow-sm h-100">
                    <img src="/assets/img/service/32.png" class="card-img-top" alt="Intermodal Rail and Road Logistics">
                    <div class="card-body">
                        <h5 class="card-title">Intermodal Conveyance</h5>
                        <p class="card-text">
                            Seamlessly combining rail, road, and ocean networks for door-to-door delivery, leveraging standardized containers to ensure smooth, sustainable, and modern supply chain execution.
                        </p>

                        <!-- <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#railFreightModal">Read More</button> -->
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card shadow-sm h-100">
                    <img src="/assets/img/service/31.png" class="card-img-top" alt="Specialized Rail Cargo Handling - Hazardous and Oversized">
                    <div class="card-body">
                        <h5 class="card-title">Specialized Cargo</h5>
                        <p class="card-text">
                            Professional handling of temperature-controlled, hazardous (IMO/DG), and oversized cargo, ensuring strict compliance, safety, and environmentally responsible logistics practices.
                        </p>
                        <!-- <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#railFreightModal">Read More</button> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="modal fade" id="railFreightModal" tabindex="-1" aria-labelledby="railFreightModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="railFreightModalLabel">TurantGo Rail Freight Capabilities</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p>
                    TurantGo delivers high-capacity, reliable, and cost-efficient rail logistics designed for long-distance and bulk movement. Our modern rail network ensures smoother transit, better safety, and seamless multimodal integration with road, air, and port operations.
                </p>

                <h6>What We Offer</h6>
                <ul>
                    <li>FCL, LCL, and bulk cargo movement across major rail corridors</li>
                    <li>Specialized handling for refrigerated, oversized, and high-value shipments</li>
                    <li>Optimized scheduling backed by digital planning tools</li>
                    <li>Direct integration with warehousing and last-mile delivery</li>
                    <li>Live shipment visibility and status updates</li>
                </ul>

                <h6>Key Advantages</h6>
                <ul>
                    <li>Lower transportation cost for long-distance movement</li>
                    <li>Greener and more sustainable freight option</li>
                    <li>Predictable transit times with strong reliability</li>
                    <li>Smooth multimodal coordination for end-to-end logistics</li>
                    <li>Secure movement of bulk, sensitive, and industrial cargo</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?php include('./includes/footer.php'); ?>
