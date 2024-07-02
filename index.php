<?php

require 'helpers.php';

// Simple router class
class Router {
    private $routes = [];

    public function add($route, $callback) {
        $this->routes[$route] = $callback;
    }

    public function dispatch() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if (array_key_exists($uri, $this->routes)) {
            call_user_func($this->routes[$uri]);
        } else {
            // 404 Not Found
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
        }
    }
}

// Initialize router
$router = new Router();

// Define routes
$router->add('', function() {
    require 'views/index.php';
});

$router->add('event', function() {
    require 'views/event.php';
});

$router->add('sponsorship', function() {
    require 'views/sponsorship.php';
});

$router->add('contact', function() {
    require 'views/contact.php';
});

// Dispatch the request
$router->dispatch();
