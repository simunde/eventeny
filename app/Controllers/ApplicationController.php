<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../Models/Application.php';

class ApplicationController {
    private $model;

    public function __construct() {
        $this->model = new Application(require __DIR__ . '/../../config/database.php');
    }

    public function create() {
        $this->model->create($_POST['application_type_id'], $_POST['name'], $_POST['email']);
        header('Location: /vendor.php');
    }

    public function list() {
        return $this->model->getAll();
    }

    public function updateStatus() {
        $this->model->updateStatus($_POST['id'], $_POST['status']);
        header('Location: /view_applications.php');
    }

    public function getByEmail($email) {
        return $this->model->getByEmail($email);
    }
}
?>
