<?php
require_once __DIR__ . '/../app/Controllers/ApplicationTypeController.php';
include __DIR__ . '/../app/Views/common/header.php';

$controller = new ApplicationTypeController();
$application_types = $controller->list();
?>

<link rel="stylesheet" type="text/css" href="/styles_organizer.css">

<div class="form-container">
    <h1>Organizer Dashboard</h1>
    <form action="/create_application_type.php" method="POST">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" required>
        </div>
        <div class="form-group">
            <label for="cover_photo">Cover Photo URL:</label>
            <input type="text" id="cover_photo" name="cover_photo" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
        </div>
        <div class="submit-container">
            <input type="submit" value="Create">
        </div>
    </form>

    <div class="application-list">
        <h2>Existing Application Types</h2>
        <ul>
            <?php foreach ($application_types as $type): ?>
                <li><?= htmlspecialchars($type['title']) ?> - <?= htmlspecialchars($type['description']) ?> (Deadline: <?= htmlspecialchars($type['deadline']) ?>, Address: <?= htmlspecialchars($type['address']) ?>)</li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
