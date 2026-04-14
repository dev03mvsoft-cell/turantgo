<?php
// Detect protocol & base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$baseURL = $protocol . $_SERVER['HTTP_HOST'];

// Create dynamic current URL (without query parameters for canonical)
$url = $baseURL . strtok($_SERVER['REQUEST_URI'], '?');

// Current full URL including query string (for OG)
$currentURL = $baseURL . $_SERVER['REQUEST_URI'];

// Default OG image path (change as needed)
$ogImage = $baseURL . '/assets/img/team/logo1.png';
?>
<!DOCTYPE html>
<html lang="en">

<?php
// Define dynamic SEO variables based on page
$page_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($page_path) {
    case '/':
        $page_title = "TurantGo | Best Logistics & 3PL Supply Chain Solutions in India";
        $meta_desc = "TurantGo offers premium 3PL & 4PL logistics, warehousing, and multimodal transport solutions in India. Fast, reliable, and tech-driven supply chain excellence.";
        $meta_keywords = "logistics company India, 3PL logistics services, supply chain solutions India, multimodal transport, freight forwarding India";
        break;
    case '/services/air-freight':
        $page_title = "Air Freight Services in India | Fast International Air Cargo - TurantGo";
        $meta_desc = "Premium air freight and global cargo services by TurantGo. Reliable, time-bound delivery across major international and domestic airports.";
        $meta_keywords = "air cargo services India, international air freight, fast air logistics, air freight forwarding";
        break;
    case '/services/rail':
        $page_title = "Rail Freight & Train Cargo Services in India | TurantGo Logistics";
        $meta_desc = "Cost-effective and reliable rail freight solutions for bulk and industrial cargo. Seamless multimodal integration across India's rail network.";
        $meta_keywords = "rail freight India, train cargo services, industrial rail logistics, bulk cargo movement";
        break;
    case '/services/road':
        $page_title = "Road Transport & Surface Logistics India | FTL & LTL Trucking - TurantGo";
        $meta_desc = "Secure and efficient road freight services across India. Specialized fleet for FTL, LTL, and heavy industrial cargo with real-time tracking.";
        $meta_keywords = "road transport services India, FTL trucking India, LTL logistics, surface transport India";
        break;
    case '/services/sea':
        $page_title = "Ocean Freight & Sea Cargo Shipping India | TurantGo Multimodal";
        $meta_desc = "Comprehensive sea freight and container shipping services. Door-to-door ocean logistics for FCL, LCL, and specialized cargo.";
        $meta_keywords = "ocean freight services India, sea cargo shipping, container shipping India, domestic sea freight";
        break;
    case '/services/warehousing':
        $page_title = "Warehousing Solutions & 3PL Storage India | TurantGo Logistics";
        $meta_desc = "Modern, tech-driven warehousing and inventory management services in India. Strategic storage facilities near major ports and highways.";
        $meta_keywords = "warehousing solutions India, 3PL warehousing, storage facility Rohtak, inventory management India";
        break;
    case '/services/third-party-fourth-party':
        $page_title = "3PL & 4PL Logistics Management India | Supply Chain Consulting - TurantGo";
        $meta_desc = "End-to-end 3PL and 4PL supply chain leadership. Optimize your logistics ecosystem with TurantGo's expert management and digital control tower.";
        $meta_keywords = "3PL logistics India, 4PL supply chain management, lead logistics services, supply chain optimization";
        break;
    case '/services/first-mile-and-last-mile':
        $page_title = "First Mile & Last Mile Delivery India | B2B Doorstep Logistics - TurantGo";
        $meta_desc = "Reliable first mile and last mile solutions for seamless supply chain execution. Ensure fast and accurate doorstep delivery across India.";
        $meta_keywords = "last mile delivery India, first mile logistics, B2B doorstep delivery, FMLM solutions";
        break;
    case '/about':
        $page_title = "About TurantGo | Leading Multimodal Logistics Provider in India";
        $meta_desc = "Learn about TurantGo's mission to redefine logistics through multimodal excellence, innovation, and unwavering commitment to customer success.";
        $meta_keywords = "about TurantGo, logistics experts India, multimodal solutions company";
        break;
    case '/contact':
        $page_title = "Contact TurantGo | Get a Logistics Quote & Expert Consultation";
        $meta_desc = "Get in touch with TurantGo for premium logistics solutions. Request a quote or visit our regional offices in India for expert supply chain consultation.";
        $meta_keywords = "contact TurantGo, logistics quote, supply chain consultation, contact logistics company India";
        break;
    case '/career':
        $page_title = "Careers | Join the TurantGo Logistics Team";
        $meta_desc = "Build your career with TurantGo. Join a team of logistics professionals redefining multimodal transportation and supply chain management in India.";
        $meta_keywords = "logistics careers India, supply chain jobs, transport jobs India, TurantGo jobs";
        break;
    default:
        $page_title = "TurantGo | Premium Multimodal Logistics Solutions";
        $meta_desc = "TurantGo delivers end-to-end supply chain excellence through air, rail, road, and sea freight combined with modern warehousing.";
        $meta_keywords = "TurantGo, logistics services, multimodal transport, supply chain India";
        break;
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TurantGo Multimodal Solutions Pvt. Ltd.">

    <title><?php echo $page_title; ?></title>

    <meta name="description" content="<?php echo $meta_desc; ?>">

    <meta name="keywords" content="<?php echo $meta_keywords; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($currentURL, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $meta_desc; ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:site" content="@turantgo">
<meta name="google-site-verification" content="ovofUuSIs6qSAALQzimGv9bUGmbosr8rcD5FD7_FYH0" />
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="icon" href="/assets/img/team/logo1.png">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": "Organization",
                    "@id": "<?php echo $baseURL; ?>/#organization",
                    "name": "TurantGo Multimodal Solutions Pvt Ltd",
                    "url": "<?php echo $baseURL; ?>",
                    "logo": "<?php echo $ogImage; ?>",
                    "contactPoint": {
                        "@type": "ContactPoint",
                        "telephone": "+91-8586014767",
                        "contactType": "customer service"
                    }
                },
                {
                    "@type": "WebSite",
                    "@id": "<?php echo $baseURL; ?>/#website",
                    "url": "<?php echo $baseURL; ?>",
                    "name": "TurantGo",
                    "publisher": {
                        "@id": "<?php echo $baseURL; ?>/#organization"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "parentOrganization": {
                        "@id": "<?php echo $baseURL; ?>/#organization"
                    },
                    "name": "TurantGo Multimodal Solutions Pvt Ltd",
                    "image": "<?php echo $ogImage; ?>",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "House No. 1642, Ward No. 21, Sheetal Nagar, Bagh Wali Gali, Jhajjar Road",
                        "addressLocality": "Rohtak",
                        "postalCode": "124001",
                        "addressRegion": "Haryana",
                        "addressCountry": "IN"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": "28.8771",
                        "longitude": "76.5771"
                    },
                    "url": "<?php echo $baseURL; ?>",
                    "telephone": "+91-8586014767",
                    "openingHours": "Mo-Sa 09:00-18:00"
                }<?php
                // Dynamic BreadcrumbList
                $parts = array_filter(explode('/', trim($page_path, '/')));
                if (!empty($parts)) {
                    $itemListElement = [[
                        "@type" => "ListItem",
                        "position" => 1,
                        "item" => [
                            "@id" => $baseURL . "/",
                            "name" => "Home"
                        ]
                    ]];
                    $current_path = '/';
                    $pos = 2;
                    foreach ($parts as $part) {
                        $current_path .= $part . '/';
                        $name = ucwords(str_replace('-', ' ', $part));
                        $itemListElement[] = [
                            "@type" => "ListItem",
                            "position" => $pos++,
                            "item" => [
                                "@id" => $baseURL . rtrim($current_path, '/'),
                                "name" => $name
                            ]
                        ];
                    }
                    echo ", { \"@type\": \"BreadcrumbList\", \"itemListElement\": " . json_encode($itemListElement, JSON_UNESCAPED_SLASHES) . " }";
                }
                ?>
            ]
        }
    </script>
    <!-- ===========  All Stylesheet ================= -->
    <?php
    function get_asset_version($path)
    {
        // If user explicitly asks to clear cache via URL
        if (isset($_GET['clear_cache'])) {
            return time();
        }
        $full_path = $_SERVER['DOCUMENT_ROOT'] . $path;
        return file_exists($full_path) ? filemtime($full_path) : '1.0';
    }
    ?>
    <script>
        // If ?clear_cache is in the URL, clear session storage (resets loader etc)
        if (window.location.search.includes('clear_cache')) {
            sessionStorage.clear();
            // Optional: remove the parameter from URL to prevent infinite clearing
            const url = new URL(window.location);
            url.searchParams.delete('clear_cache');
            window.history.replaceState({}, document.title, url);
        }
    </script>
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="/assets/css/icons.css?v=<?php echo get_asset_version('/assets/css/icons.css'); ?>">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="/assets/css/animate.css?v=<?php echo get_asset_version('/assets/css/animate.css'); ?>">
    <!--  slick css plugins -->
    <link rel="stylesheet" href="/assets/css/slick.css?v=<?php echo get_asset_version('/assets/css/slick.css'); ?>">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css?v=<?php echo get_asset_version('/assets/css/magnific-popup.css'); ?>">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="/assets/css/metismenu.css?v=<?php echo get_asset_version('/assets/css/metismenu.css'); ?>">
    <!-- select2 css file -->
    <link rel="stylesheet" href="/assets/css/nice-select2.css?v=<?php echo get_asset_version('/assets/css/nice-select2.css'); ?>">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css?v=<?php echo get_asset_version('/assets/css/bootstrap.min.css'); ?>">
    <!--  main style css file -->
    <link rel="stylesheet" href="/assets/css/style.css?v=<?php echo get_asset_version('/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- <link rel="stylesheet" href="/assets/css/metisMenu.min.css"> -->
    <!-- template main style css file -->
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->
    <style>
        .mobile-nav .sub-menu {
            display: none;
        }

        .mobile-nav .mm-active>.sub-menu {
            display: block;
        }
    </style>
</head>


<body class="body-wrapper">
    <?php include 'loader.php'; ?>
    <script>
        // Prevent flicker: Check session storage immediately before browser paint
        if (sessionStorage.getItem('loader_shown') === 'true') {
            document.getElementById('loader-wrapper').style.display = 'none';
        }
    </script>
    <header class="header-1" id="content">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-sm-5 col-md-4 col-6 pr-lg-5">
                    <div class="logo">
                        <a href="/">
                            <img src="/assets/img/team/logo.png" alt="Transland">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 text-end p-lg-0 d-none d-lg-flex justify-content-end align-items-end">
                    <div class="menu-wrap">
                        <div class="main-menu">
                            <ul>
                                <li>
                                    <a href="/">Home <i></i></a>
                                </li>

                                <li><a href="/about">about</a></li>
                                <li>
                                    <a href="#">Services </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/">Multimodal Solutions <i class="fas fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/services/air-freight">Air Freight</a></li>
                                                <li><a href="/services/rail">Rail Logistics</a></li>
                                                <li><a href="/services/road">Road Conveyance</a></li>
                                                <li><a href="/services/sea">Sea Freight</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/services/warehousing">warehousing</a>
                                        </li>
                                        <li>
                                            <a href="/services/third-party-fourth-party">Supply Chain</a>
                                        </li>
                                        <li>
                                            <a href="/services/first-mile-and-last-mile">FMLM (First Mile | Last Mile)</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="/career">Careers

                                    </a>
                                </li>

                                <!-- <li><a href="news.html">News</a></li> -->
                                <li><a href="/contact">Contact</a></li>
                            </ul>

                        </div>
                    </div>

                </div>
                <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger"><i class="fal fa-bars"></i></div>
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                    <li> <a href="/">Home <i></i></a>
                                    </li>
                                    <li><a href="/about">about</a></li>
                                    <li>
                                        <a href="/career">Careers</a>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li>
                                        <a class="has-arrow" href="#">Services</a>
                                        <ul class="sub-menu">

                                            <li>
                                                <a class="has-arrow" href="#">Multimodal Solutions</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/services/air-freight">Air Freight</a></li>
                                                    <li><a href="/services/rail">Rail Logistics</a></li>
                                                    <li><a href="/services/road">Road Conveyance</a></li>
                                                    <li><a href="/services/sea">Sea Freight</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="/services/warehousing">Warehousing</a>
                                            </li>

                                            <li>
                                                <a href="/services/third-party-fourth-party">Supply Chain</a>
                                            </li>

                                            <li>
                                                <a href="/services/first-mile-and-last-mile">FMLM (First Mile | Last Mile)</a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- <script>
        $(document).ready(function () {
    // Initialize metismenu
    $('#mobile-menu').metisMenu();

    // Mobile menu open
    $("#hamburger").on("click", function () {
        $(".mobile-nav").addClass("show");
        $(".overlay").addClass("active");
    });

    // Close menu
    $(".close-nav, .overlay").on("click", function () {
        $(".mobile-nav").removeClass("show");
        $(".overlay").removeClass("active");
    });

    // prevent scrolling when menu open
    $(".has-arrow").on("click", function (e) {
        e.preventDefault();
    });
});

    </script>
    <script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/metisMenu.min.js"></script> -->
