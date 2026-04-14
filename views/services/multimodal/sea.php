<?php include('./includes/header.php'); ?>


<style>
    /* --- ELEGANCE AND ATTRACTION IMPROVEMENTS (Consistent Palette) --- */



    /* General Section Styling */
    .page-banner-wrap {
        padding: 8rem 0;
        /* Consistent banner height */
    }

    .page-heading h1 {
        /* font-size: 3.5rem;  */
        font-weight: 700;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
    }

    .section-title1 {
        font-size: 2.5rem;
        /* Larger, more elegant titles */
        font-weight: 700;

        /* color: var(--primary-color); */
    }

    .section-subtitle {
        font-size: 1.2rem;
        /* color: var(--text-muted); */
    }


    /* 1. Ocean Freight Intro Section */
    .sea-freight-intro-section {
        background-color: #ffffff;
        /* padding: 100px 0; */
        /* Increased vertical space */
    }

    .sea-freight-intro-section img {
        border-radius: 1rem;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .sea-freight-intro-section img:hover {
        transform: scale(1.02);
    }


    /* 2. Detail Section */
    .sea-freight-detail-section {
        background-color: var(--light-bg);
        /* Use soft background */
        /* padding: 100px 0; */
    }

    .sea-freight-detail-section h4 {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .sea-freight-detail-section ul li {
        margin-bottom: 1rem;
        color: #003e6ef6;
        font-size: 1.1rem;
        position: relative;
        padding-left: 1.8rem;
        list-style: none;
    }

    .sea-freight-detail-section ul li::before {
        content: "\f058";
        /* Font Awesome check circle */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: var(--secondary-color);
        /* Elegant accent color for list icons */
        position: absolute;
        left: 0;
        top: 0;
    }

    .sea-freight-detail-section img {
        box-shadow: var(--shadow-hover);
    }


    /* 3. Brief Section (Refined into a dedicated feature block) */
    .sea-freight-brief-section {
        background-color: #ffffff;
        /* padding: 100px 0; */
    }

    .sea-freight-brief-section .content-block {
        /* Applying light background and subtle shadow to the content block for elegance */
        background-color: var(--light-bg);
        border-radius: 1.5rem;
        padding: 3rem;
        box-shadow: var(--shadow-subtle);
    }

    .sea-freight-brief-section img {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .sea-freight-brief-section .card-title {
        font-size: 2rem;
        color: var(--primary-color);
    }

    .sea-freight-brief-section h6 {
        color: var(--secondary-color);
        /* Use accent color for subheadings */
        font-weight: 700;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .sea-freight-brief-section ul li {
        color: var(--text-dark);
        font-size: 1.05rem;
        position: relative;
        padding-left: 1.5rem;
        list-style: none;
        margin-bottom: 0.4rem;
    }

    .sea-freight-brief-section ul li::before {
        content: "\f00c";
        /* Use a simple check icon for lists */
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
</style>
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('/assets/img/service/service_sea.png');">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Domestic Ocean Freight Services</h1>
        </div>
    </div>
</div>

<section class="sea-freight-intro-section">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <img src="/assets/img/about/cover_image_29.png" class="img-fluid rounded-4 shadow-lg" alt="TurantGo Ocean Freight and Container Shipping Services India">
            </div>
            <div class="col-lg-6 order-lg-1">
                <h2 class="section-title1 mb-4" style="text-align: left;">Comprehensive Sea Freight Services</h2>
                <p class="section-subtitle lead pb-1" style="text-align: left;">
                   At TurantGo, we transform every ocean journey into a strategic advantage for your business. From industrial bulk shipments to high-volume retail cargo, we deliver with unmatched precision, speed, and reliability. Every container, pallet, or specialized shipment is handled with the care, expertise, and technology that global supply chains demand, ensuring your goods reach every port safely, on schedule, and without compromise.
                </p>
                <!-- <p>
                   Our integrated maritime solutions don’t stop at moving cargo — we optimize every stage of the ocean supply chain. With advanced route planning, port coordination, and seamless multimodal connections to road, rail, and air transport, TurantGo eliminates bottlenecks, reduces lead times, and guarantees transparency. Real-time monitoring, digital reporting, and 24×7 control tower oversight give you full visibility and confidence, turning logistics into a competitive edge.
                </p> -->
            </div>
        </div>
    </div>
</section>


<section class="sea-freight-detail-section">
  <div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="section-title1">Specialized Cargo</h2>
        <p class="section-subtitle">Tailored solutions for every shipment size and type, ensuring efficiency and sustainability.</p>
    </div>

 <div class="row g-5 align-items-center">
    <div class="col-lg-6">
        <h4 class="fw-bold colorblue">Our Freight Services</h4>
        <ul class="list-unstyled mt-3">
            <li><strong>Full Container Load (FCL):</strong> TurantGo moves dedicated containers for clients needing maximum volume shipments quickly and securely.</li>
            <li><strong>Less-than-Container Load (LCL):</strong> We consolidate smaller shipments from multiple clients, saving cost while maintaining efficiency.</li>
            <li>We handle specialized cargo including Reefer, Hazardous (DG), and Oversized goods, ensuring all safety and regulatory requirements are met.</li>
            <!-- <li>We plan and execute optimized shipping routes for faster delivery across domestic and international ports.</li> -->
        </ul>

        <h4 class="fw-bold mt-4 colorblue">How TurantGo Operates</h4>
        <ul class="list-unstyled mt-2">
            <li><strong>Cost-Efficient Solutions:</strong> We provide competitive rates for bulk, heavy, and specialized shipments.</li>
            <li><strong>Global Network Access:</strong> TurantGo leverages its network of trusted shipping partners for seamless international connections.</li>
            <li><strong>End-to-End Multimodal Support:</strong> We coordinate road, rail, and port transfers to give clients full visibility and smooth logistics flow.</li>
        </ul>
    </div>
    <div class="col-lg-6">
        <img src="/assets/img/service/shpping.jpg" class="img-fluid rounded-4 shadow-lg" alt="TurantGo Sea Freight"
            style="object-fit:cover; border-radius: 1rem; box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);" alt="TurantGo Sea Freight and Specialized Cargo Logistics">
    </div>
</div>

</div>

</section>
<!-- 
<section class="sea-freight-brief-section">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title1">End-to-End International Logistics</h2>
            <p class="section-subtitle">We manage the full cycle of your shipment, providing security and peace of mind.</p>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-md-10">
                <div class="content-block h-100">
                    <div class="row g-5 align-items-center">

                        <div class="col-md-5 text-center">
                            



                            <img src="/assets/img/about/2.png" class="img-fluid rounded-4" alt="Intermodal Shipping">
                        </div>

                        <div class="col-md-7">
                            <h5 class="card-title fw-bold">Integrated Logistics & Visibility</h5>
                            <p class="mt-3">
                                TurantGo connects ocean Conveyance with seamless rail and road freight, managing the entire door-to-door journey. This integrated approach minimizes risk, reduces delays, and provides complete digital visibility.
                            </p>

                            <h6 class="mt-4">Included Value-Added Services</h6>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled">
                                        <li>Documentation & Customs Clearance</li>
                                        <li>Cargo Insurance & Risk Management</li>
                                        <li>Consolidation & Deconsolidation</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled">
                                        <li>Warehousing & Distribution</li>
                                        <li>Real-time Shipment Tracking</li>
                                        <li>Trade Compliance Consulting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<?php include('./includes/footer.php'); ?>
