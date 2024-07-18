<!-- public/organizer.php -->
<?php
require_once __DIR__ . '/../app/Controllers/ApplicationTypeController.php';

$controller = new ApplicationTypeController();
$application_types = $controller->list();


include __DIR__ . '/../app/Views/application_types/create.php';
include __DIR__ . '/../app/Views/application_types/list.php';
// Do not include the footer here
