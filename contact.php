<?php
include('Model/Contact.php');
include('Controller/ContactController.php');


$userModel = new Contact();

$adminController = new ContactController($userModel);
$adminController->indexAction();
?>
