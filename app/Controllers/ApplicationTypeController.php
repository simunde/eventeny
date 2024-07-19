<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../Models/ApplicationType.php';

class ApplicationTypeController {
    private $model;

    public function __construct() {
        $this->model = new ApplicationType(require __DIR__ . '/../../config/database.php');
    }

    public function create() {
        $this->model->create($_POST['title'], $_POST['description'], $_POST['deadline'], $_POST['cover_photo'], $_POST['address']);
        header('Location: /organizer.php');
    }

    public function list() {
        return $this->model->getAll();
    }
}
?>
