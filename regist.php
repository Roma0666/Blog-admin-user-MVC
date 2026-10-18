<?php
require_once('Controller/RegistController.php');

$action = isset($_GET['action']) ? $_GET['action'] : 'createAccount';

$controller = new RegistController();
if ($action === 'createAccount') {
    $controller->createAccount();
}
?>
