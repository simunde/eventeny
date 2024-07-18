<?php
require_once __DIR__ . '/../app/Controllers/ApplicationController.php';

$controller = new ApplicationController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $applications = $controller->getByEmail($_POST['email']);
}

include __DIR__ . '/../app/Views/applications/track_status.php';
?>
