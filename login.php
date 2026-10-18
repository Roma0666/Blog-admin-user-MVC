<?php
require_once('Controller/LoginController.php');

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$controller = new LoginController();
if ($action === 'login') {
    $controller->login();
}
?>
