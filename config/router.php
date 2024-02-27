<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'HomeController.php',
    '/mentions-legales'=>'MentionController.php',
    '/register'=>'RegisterController.php',
    '/login' => 'LoginController.php',
    '/product'=>'ProductController.php',
    '/product-create'=>'ProductCreateController.php',
    '/product-read'=>'ProductReadController.php',
    '/Admin'=>'AdminController.php',
];


if (array_key_exists($uri, $routes)) {
    
    require_once(__DIR__ ."/../app/Controllers/". $routes[$uri]);
} else {
    http_response_code(404);
    require_once(__DIR__ . "/../app/Controllers/404.php");
};
