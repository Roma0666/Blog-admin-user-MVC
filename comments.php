<?php
require  'Controller/CommentController.php';

session_start();

$action = $_GET['action'] ?? 'show';
$post_id = $_GET['post_id'] ?? null;

$controller = new CommentsController();

if ($action === 'show' && $post_id) {
    $controller->show($post_id);
} elseif ($action === 'addComment' && $post_id) {
    $controller->addComment($post_id);
} else {
    echo "Page not found!";
}
