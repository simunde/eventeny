<?php

class ApplicationType {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($title, $description, $deadline, $cover_photo) {
        $stmt = $this->pdo->prepare('INSERT INTO application_types (title, description, deadline, cover_photo) VALUES (?, ?, ?, ?)');
        $stmt->execute([$title, $description, $deadline, $cover_photo]);
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM application_types');
        return $stmt->fetchAll();
    }
}
?>
