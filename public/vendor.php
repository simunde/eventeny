<?php
require_once __DIR__ . '/../app/Controllers/ApplicationTypeController.php';
include __DIR__ . '/../app/Views/common/header.php';

$controller = new ApplicationTypeController();
$application_types = $controller->list();
?>

<link rel="stylesheet" type="text/css" href="css/styles_vendor.css">

<div class="form-container">
    <h1>Vendor Application</h1>
    <form action="/submit_application.php" method="POST">
        <div class="form-group">
            <label for="application_type">Application Type:</label>
            <select name="application_type_id" id="application_type" onchange="updateDetails()">
                <?php foreach ($application_types as $type): ?>
                    <option value="<?= htmlspecialchars($type['id']) ?>" data-description="<?= htmlspecialchars($type['description']) ?>" data-address="<?= htmlspecialchars($type['address']) ?>"><?= htmlspecialchars($type['title']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" readonly></textarea>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" readonly></textarea>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="submit-container">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

<script>
    function updateDetails() {
        var select = document.getElementById('application_type');
        var description = select.options[select.selectedIndex].getAttribute('data-description');
        var address = select.options[select.selectedIndex].getAttribute('data-address');
        document.getElementById('description').value = description;
        document.getElementById('address').value = address;
    }

    // Initialize the description and address with the first option's details
    document.addEventListener('DOMContentLoaded', function() {
        updateDetails();
    });
</script>
