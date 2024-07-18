<!-- app/Views/application_types/list.php -->
<ul>
    <?php foreach ($application_types as $type): ?>
        <li><?= htmlspecialchars($type['title']) ?> - <?= htmlspecialchars($type['description']) ?> (Deadline: <?= htmlspecialchars($type['deadline']) ?>)</li>
    <?php endforeach; ?>
</ul>
