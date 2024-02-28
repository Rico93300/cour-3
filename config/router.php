<?php
require_once(__DIR__ . "/db.php");
require_once(__DIR__ . "/function.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'HomeController.php',
    '/mentions-legales' => 'MentionController.php',
    '/register' => 'RegisterController.php',
    '/login' => 'LoginController.php',
    '/logout' => 'LogoutController.php',
    '/product' => 'ProductController.php',
    '/product-create' => 'ProductCreateController.php',
    '/product-read' => 'ProductReadController.php',
    '/product-delete' => 'ProductDeleteController.php',
    '/admin' => 'AdminController.php',
    '/admin-update' => 'AdminUpdateController.php',
    '/admin-delete' => 'AdminDeleteController.php',
    '/product-update' => 'ProductUpdateController.php',

];
$secureRoutes = [
    '/admin' => 'AdminController.php',
    '/admin-update' => 'AdminUpdateController.php',
    '/admin-delete' => 'AdminDeleteController.php',
];
if (array_key_exists($uri, $secureRoutes)) {
    if (isset($_SESSION['user']) || !$_SESSION['user']['admin'] == 1) {
        redirectToRoute('/login');
    }
};


if (array_key_exists($uri, $routes)) {

    require_once(__DIR__ . "/../app/Controllers/" . $routes[$uri]);
} else {
    http_response_code(404);
    require_once(__DIR__ . "/../app/Controllers/404.php");
};
