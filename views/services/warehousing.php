<?php include('./includes/header.php'); ?>
<style>
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {    
    color: #495057;
    background-color: #10101044;
    border-color: #dee2e6 #dee2e6 #fff;
    ;
}
.nav-link {
    color: #024c8e !important;
}
</style>

<div class="page-banner-wrap text-center bg-cover" style="background-image: url('/assets/img/about/warehouse1.png')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Logistics & Supply Chain Solutions</h1>
        </div>
    </div>
</div>

<section class="service-details-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-12 pe-xl-5">
                <div class="service-details-contents">
                    <ul class="nav nav-tabs mb-4" id="serviceTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="warehousing-tab" data-bs-toggle="tab" data-bs-target="#warehousing-content" type="button" role="tab" aria-controls="warehousing-content" aria-selected="true" >
                                Warehousing Solutions
                            </button> 
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="lead-logistics-tab" data-bs-toggle="tab" data-bs-target="#lead-logistics-content" type="button" role="tab" aria-controls="lead-logistics-content" aria-selected="false">
                                Lead Logistics Services
                            </button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="serviceTabsContent">
                        
                        <div class="tab-pane fade show active" id="warehousing-content" role="tabpanel" aria-labelledby="warehousing-tab">
                            
                            <div class="service-feature-img mb-4">
                                <img src="/assets/img/service/warehouse.png" alt="TurantGo Smart Warehousing Solutions and Inventory Management India" style="height: 50vh; width: 100%; border-radius: 10px; object-fit: cover;">
                            </div>
                            
                            <div class="contents">
                                <h2>Modern Warehousing Solutions</h2>
                                <p>
                                    TurantGo delivers advanced warehousing services built to support a wide range of industries with secure, tech-driven storage and accurate inventory control. Our approach focuses on maximizing space utilization, lowering handling effort, and speeding up order processing to strengthen every link of your supply chain.
                                </p>

                                <h3>Key Features and Capabilities</h3>
                                <ul class="checked-list mt-3 mb-4">
                                    <li><strong>Prime Facility Locations:</strong> Strategically situated near major logistics touchpoints—ports, railway terminals, and national highway corridors—enabling faster multimodal movement.</li>
                                    <li><strong>Flexible Storage Infrastructure:</strong> Includes general warehousing, dry storage zones, and temperature-controlled cold chain sections for sensitive products.</li>
                                    <li><strong>Smart Inventory Systems:</strong> RFID- and barcode-enabled tracking provides real-time stock updates, automated traceability, and complete inventory visibility.</li>
                                    <li><strong>Value-Added Services (VAS):</strong> Comprehensive support including kitting, labeling, repacking, cross-docking, and quality checks.</li>
                                    <li><strong>Safety & Compliance:</strong> Operations follow stringent national and international standards, including fire safety and regulatory compliance.</li>
                                </ul>

                                <h3>Value to Your Supply Chain</h3>
                                <ul class="checked-list mt-2">
                                    <li><strong>Accelerated Order Processing:</strong> Optimized layouts and digital workflows enable faster picking, packing, and dispatch cycles.</li>
                                    <li><strong>Improved Inventory Accuracy:</strong> Real-time monitoring minimizes errors and ensures reliable data for planning and forecasting.</li>
                                    <li><strong>Lower Operational Costs:</strong> Better space planning and TurantGo-managed operations reduce overhead and improve cost efficiency.</li>
                                    <li><strong>Connected Logistics Network:</strong> Facilities are integrated with our multimodal transport and first–mile/last–mile networks.</li>
                                </ul>

                                <blockquote>
                                    “Excellence in warehousing is defined not by storage capacity, but by speed, accuracy, and seamless coordination across every operation.”
                                </blockquote>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="lead-logistics-content" role="tabpanel" aria-labelledby="lead-logistics-tab">
                            
                            <div class="service-feature-img mb-4">
                                <img src="/assets/img/service/turntgo.png" alt="TurantGo 3PL and 4PL Lead Logistics and Supply Chain Management India" style="width: 100%; border-radius: 10px; object-fit: cover;">
                            </div>

                            <div class="contents">
                                <h2>Lead Logistics (4PL) Services</h2>
                                <p>
                                    TurantGo brings end-to-end control, coordination, and optimization across your entire supply chain through a unified Lead Logistics (4PL) model. We manage complex logistics ecosystems with precision, ensuring standardized operations, digital visibility, and high-performance execution across all partners and networks.
                                </p>

                                <h3>Our Core Capabilities</h3>
                                <ul class="checked-list mt-3 mb-4">
                                    <li><strong>End-to-End Logistics Orchestration:</strong> We drive, manage, and execute logistics transformation using industry-best practices.</li>
                                    <li><strong>Unified Multi-Partner Management:</strong> Integrates multiple transport partners under one operational framework, simplifying execution.</li>
                                    <li><strong>Integrated Network of WSPs & CFAs:</strong> Consolidates Warehouse Service Providers (WSPs) and Carrying & Forwarding Agents (CFAs) for seamless coordination and centralized reporting.</li>
                                    <li><strong>24×7 Control Tower Operations:</strong> A dedicated Key Account Management system oversees your logistics through real-time tracking, daily MIS updates, and proactive communication.</li>
                                    <li><strong>Digital Integration & Real-Time Visibility:</strong> Advanced digital tools provide continuous visibility, automated reporting, and data-driven decision-making.</li>
                                </ul>

                                <h3>Value to Your Business</h3>
                                <ul class="checked-list mt-2">
                                    <li><strong>Standardized Pan-India Execution:</strong> Uniform processes and synchronized partner operations ensure consistent service quality.</li>
                                    <li><strong>Reduced Process Complexity:</strong> A single-point operational interface eliminates coordination challenges and improves transparency.</li>
                                    <li><strong>Higher Delivery Reliability:</strong> Real-time monitoring, exception handling, and proactive alerts minimize delays and reduce risks.</li>
                                    <li><strong>Enhanced Strategic Control:</strong> Integrated reporting and actionable insights support better planning, forecasting, and long-term optimization.</li>
                                </ul>

                                <blockquote>
                                    “With TurantGo’s Lead Logistics model, you gain a single, intelligent command center that connects your entire supply chain—transforming complexity into predictable performance.”
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include('./includes/sidebar.php'); ?>
            
            </div>
    </div>
</section>
<?php include('./includes/footer.php'); ?>
