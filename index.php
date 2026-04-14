<?php
// Get the current URL path without query parameters (using parse_url)
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Trim trailing slashes to normalize routes
$request = rtrim($request, '/');

// Define routes
$routes = [
    '/404' => 'views/404.php',
    '' => 'views/main.php',
    '/contact' => 'views/contact.php',
    '/about' => 'views/about.php',
    '/career' => 'views/careers.php',
    '/services/air-freight' => 'views/services/multimodal/airfreight.php',
    '/services/rail' => 'views/services/multimodal/rail.php',
    '/services/road' => 'views/services/multimodal/road.php',
    '/services/sea' => 'views/services/multimodal/sea.php',
    '/services/first-mile-and-last-mile' => 'views/services/fmlm.php',
    '/services/warehousing' => 'views/services/warehousing.php',
    '/services/third-party-fourth-party' => 'views/services/threePl&fourPL.php',
  
];

// Route matching
if (array_key_exists($request, $routes)) {
    require $routes[$request];
} else {
    // If route is not found, return 404
    http_response_code(404);
    require __DIR__ . '/views/404.php';
}