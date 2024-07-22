<?php
require_once __DIR__ . '/../app/Controllers/ApplicationController.php';
include __DIR__ . '/../app/Views/common/header.php';

$controller = new ApplicationController();
$applications = $controller->list();
?>

<link rel="stylesheet" type="text/css" href="css/styles_view_applications.css">

<div class="status-container">
    <h1>View Applications</h1>
    <div class="table-container">
        <table class="status-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Application Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($applications): ?>
                    <?php foreach ($applications as $application): ?>
                        <tr>
                            <td><?= htmlspecialchars($application['name']) ?></td>
                            <td><?= htmlspecialchars($application['email']) ?></td>
                            <td><?= htmlspecialchars($application['title']) ?></td>
                            <td><?= htmlspecialchars($application['status']) ?></td>
                            <td>
                                <form action="/update_status.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($application['id']) ?>">
                                    <select name="status">
                                        <option value="submitted" <?= $application['status'] == 'submitted' ? 'selected' : '' ?>>Submitted</option>
                                        <option value="approved" <?= $application['status'] == 'approved' ? 'selected' : '' ?>>Approved</option>
                                        <option value="waitlisted" <?= $application['status'] == 'waitlisted' ? 'selected' : '' ?>>Waitlisted</option>
                                    </select>
                                    <input type="submit" value="Update">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No applications found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
