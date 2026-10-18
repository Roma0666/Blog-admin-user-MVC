<?php

include('boostrap.php');
include('Controller/FindPostController.php');

$controller = new FindPostController($conn);
$controller->searchAction();

