<?php

require 'helpers.php';
require 'Social.php';

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

    public function getRoutes() {
        return array_keys($this->routes);
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

// Generate sitemap route
$router->add('generate-sitemap', function() use ($router) {
    require 'Sitemap.php';
    $sitemap = new Sitemap();

    // Get all routes and add them to the sitemap
    foreach ($router->getRoutes() as $route) {
        $url = 'https://www.matec.my/' . ($route ? $route : '');
        $sitemap->addPage($url, date('Y-m-d'), 'monthly', '0.8');
    }

    $sitemap->generateXML();
    echo "Sitemap generated successfully.";
});

// Dispatch the request
$router->dispatch();
