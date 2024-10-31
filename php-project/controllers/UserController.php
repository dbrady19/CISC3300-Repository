<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    // Serve back an HTML page
    public function getHtmlPage() {
        include __DIR__ . '/../views/users.html';
    }

    // Serve back JSON data
    public function getJsonData() {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        header('Content-Type: application/json');
        echo json_encode($users);
    }
}
?>
