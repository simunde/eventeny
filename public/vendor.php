<?php
require_once __DIR__ . '/../app/Controllers/ApplicationTypeController.php';

$controller = new ApplicationTypeController();
$application_types = $controller->list();

include __DIR__ . '/../app/Views/common/header.php';
?>

<link rel="stylesheet" type="text/css" href="/styles_vendor.css">

<div class="form-container">
    <h1>Vendor Application</h1>
    <form action="/submit_application.php" method="POST">
        <label for="application_type">Application Type:</label>
        <select name="application_type_id" id="application_type">
            <?php foreach ($application_types as $type): ?>
                <option value="<?= htmlspecialchars($type['id']) ?>"><?= htmlspecialchars($type['title']) ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Submit">
    </form>
</div>
