<?php
require_once __DIR__ . '/../app/Controllers/ApplicationController.php';

$controller = new ApplicationController();
$applications = $controller->list();

include __DIR__ . '/../app/Views/applications/list.php';
?>
