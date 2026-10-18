<?php

require 'boostrap.php';
include('Model/AdminPanel.php');
include('Controller/AdminPanelController.php');


$userModel = new AdminPanel();

$adminController = new AdminPanelController($userModel);
$adminController->indexAction();
?>
