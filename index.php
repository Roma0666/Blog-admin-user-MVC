<?php
include 'boostrap.php';
require 'routing.php';
require_once 'Controller/PostController.php';

$postController = new PostController($conn);
$postController->index();

mysqli_close($conn);
