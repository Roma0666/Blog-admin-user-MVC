<?php
include('boostrap.php');
include('Controller/PostPageController.php');
$postController = new PostPageController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postController->handleForm();
} else {
    $postController->showForm();
}
