<?php
//
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri == '/') {
    require 'index.php';
}
elseif ($uri == '/contact') {
    require 'contact.php';
}
elseif ($uri == '/login') {
    require 'login.php';
}
elseif ($uri == '/register') {
    require 'regist.php';
}
elseif ($uri == '/post-page') {
    require 'post-page.php';
}
else {
    http_response_code(404);
    echo '404 Not Found';
    die();
}
$routes =[
    '/index.php' => 'index.php',
    '/contact' => 'contact.php',
    '/login' => 'login.php',
    '/regist' => 'regist.php',
    '/post-page' => 'post-page.php',
    '/comments' => 'comments.php',
    '/admin-panel' => 'admin-panel.php',
    '/admin-posts' => 'admin-posts.php',
    '/admin-categories' => 'admin-categories.php',
    '/admin-tags' => 'admin-tags.php',
    '/admin-users' => 'admin-users.php',
    '/admin-contact' => 'admin-contact.php',
    '/create-user' => 'create-user.php',
    '/edit-user' => 'update-user.php',
    '/find-post' => 'find-post.php',

];
if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
else {
    http_response_code(404);
    echo '404 Not Found';
    die();
}