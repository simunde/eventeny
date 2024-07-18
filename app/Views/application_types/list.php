<!-- app/Views/application_types/list.php -->
<?php include __DIR__ . '/../common/header.php'; ?>

<h2>Existing Application Types</h2>
<ul>
    <?php foreach ($application_types as $type): ?>
        <li><?= htmlspecialchars($type['title']) ?> - <?= htmlspecialchars($type['description']) ?> (Deadline: <?= htmlspecialchars($type['deadline']) ?>)</li>
    <?php endforeach; ?>
</ul>
</body>
</html>