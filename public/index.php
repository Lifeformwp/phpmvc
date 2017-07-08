<?php

/**
 * Front controller
 */

//require '../App/Controllers/Posts.php';

spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);
    $file = $root . '/' .str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' .str_replace('\\', '/', $class) . '.php';
    }
});

//require '../Core/Router.php';

$router = new Core\Router();

//echo get_class($router);

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Post', 'action' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

//echo '<pre>';
////var_dump($router->getRoutes());
//echo htmlspecialchars(print_r($router->getRoutes(), true));
//echo '</pre>';
//
//$url = $_SERVER['QUERY_STRING'];
//
//if ($router->match($url)) {
//    echo '<pre>';
//    var_dump($router->getParams());
//    echo '</pre>';
//} else {
//    echo "No route found for URL '$url'";
//}

$router->dispatch($_SERVER['QUERY_STRING']);