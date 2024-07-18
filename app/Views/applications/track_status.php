<!-- app/Views/applications/track_status.php -->
<?php include __DIR__ . '/../common/header.php'; ?>

<div class="track-status-container">
    <h1>Track Application Status</h1>
    <form action="/track_status.php" method="POST" class="track-status-form">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required class="email-input">
        <input type="submit" value="Track Status" class="submit-button">
    </form>

    <?php if (isset($applications)): ?>
        <h2>Your Applications</h2>
        <table class="status-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Application Type</th>
                    <th>Status</th>
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
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No applications found for this email.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
