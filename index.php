<?php
require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$navigation = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/services' => 'controllers/services.php'
];

if (array_key_exists($uri, $navigation)) {
    require $navigation[$uri];
} else {
    http_response_code(404);
    require 'controllers/404.php';
}
