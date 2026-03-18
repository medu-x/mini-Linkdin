<?php

class HomeController
{
    public function index()
    {
        // Guard: must be logged in
        if (!isset($_SESSION['email'])) {
            header("Location: index.php?page=login");
            exit;
        }

        // Fetch all users via Model
        global $conn;
        $userModel = new UserModel($conn);
        $users = $userModel->getAll();

        // Load the home view
        require 'views/home/index.php';
    }
}
