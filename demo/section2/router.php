<?php 
    // Will parse the path and separate the path and query string. Ex: /contact?name=albert will be separated into an array.
    // dd(parse_url($uri))['path'];

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // if ($uri === '/') {
    //     require 'controllers/index.php';
    // } else if ($uri === '/about') {
    //     require 'controllers/about.php';
    // } else if ($uri === '/contact') {
    //     require 'controllers/contact.php';
    // }

    $routes = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
    ];

    function routeToController($uri, $routes) {
        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    };

    function abort($code = 404) {
        // Built-in function to throw response code error
        http_response_code($code);

        require "controllers/{$code}.php";

        die();
    };

    routeToController($uri, $routes);

?>