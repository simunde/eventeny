<?php
require_once __DIR__ . '/../app/Controllers/ApplicationTypeController.php';

$controller = new ApplicationTypeController();
$application_types = $controller->list();

include __DIR__ . '/../app/Views/applications/create.php';
?>
