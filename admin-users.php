<?php
require 'boostrap.php';
require 'Controller/AdminPanelUsersController.php';

$adminPanelUserController = new AdminPanelUsersController($conn);
$adminPanelUserController->indexAction();
?>

