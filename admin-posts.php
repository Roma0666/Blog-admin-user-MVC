<?php
require 'boostrap.php';
require 'Controller/AdminPanelPostController.php';

$adminPanelPostController = new AdminPanelPostController($con);
$adminPanelPostController->indexAction();