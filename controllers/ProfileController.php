<?php

class ProfileController {
    public function index() {
        if(!isset($_SESSION['email'])) {
            header("Location: index.php?page=login");
            exit;
        }
        global $conn;
        $userModel = new UserModel($conn);
        $user = $userModel->getUserById($_GET['user']);
        require 'views/profile/index.php';
    }
}