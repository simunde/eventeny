<?php

class Application {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($application_type_id, $name, $email) {
        $stmt = $this->pdo->prepare('INSERT INTO applications (application_type_id, name, email) VALUES (?, ?, ?)');
        $stmt->execute([$application_type_id, $name, $email]);
    }

    public function getByEmail($email) {
        $stmt = $this->pdo->prepare('
            SELECT 
                applications.id, 
                applications.name, 
                applications.email, 
                applications.status, 
                application_types.title 
            FROM 
                applications 
            JOIN 
                application_types 
            ON 
                applications.application_type_id = application_types.id
            WHERE 
                applications.email = ?
        ');
        $stmt->execute([$email]);
        return $stmt->fetchAll();
    }

    public function getAll() {
        $stmt = $this->pdo->query('
            SELECT 
                applications.id, 
                applications.name, 
                applications.email, 
                applications.status, 
                application_types.title 
            FROM 
                applications 
            JOIN 
                application_types 
            ON 
                applications.application_type_id = application_types.id
        ');
        return $stmt->fetchAll();
    }

    public function updateStatus($id, $status) {
        $stmt = $this->pdo->prepare('UPDATE applications SET status = ? WHERE id = ?');
        $stmt->execute([$status, $id]);
    }
}
?>
