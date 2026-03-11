<?php

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $pwd   = $_POST['password'] ?? '';

            if ($email === '' || $pwd === '') {
                echo "Please fill all fields.";
                exit;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email.";
                exit;
            }

            global $conn;
            $userModel = new UserModel($conn);
            $row = $userModel->findByEmail($email);

            if (!$row) {
                echo "Email is not registered.";
                exit;
            }
            if (password_verify($pwd, $row['password'])) {
                $_SESSION['id']          = $row['id'];
                $_SESSION['email']       = $email;
                $_SESSION['name']        = $row['name'];
                $_SESSION['profile_url'] = $row['profile_url'];
                header("Location: index.php?page=dashboard");
                exit;
            } else {
                echo "Incorrect password.";
            }
        } else {
            // GET — show login view
            require 'views/auth/login.php';
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name  = trim($_POST['username'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $pwd   = $_POST['password'] ?? '';

            if ($name === '' || $email === '' || $pwd === '') {
                echo "Please fill all fields.";
                exit;
            }
            if ($pwd !== ($_POST['confirm_password'] ?? '')) {
                echo "Passwords do not match.";
                exit;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email.";
                exit;
            }

            $hashedPwd   = password_hash($pwd, PASSWORD_DEFAULT);
            $profile_url = "images/defaults/téléchargement (" . rand(1, 11) . ").jpeg";

            try {
                global $conn;
                $userModel = new UserModel($conn);
                $userModel->create($name, $email, $hashedPwd, $profile_url);
                header("Location: index.php?page=login");
                exit;
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "This email is already used.";
                } else {
                    echo "Error: " . $e->getMessage();
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            // GET — show register view
            require 'views/auth/register.php';
            }
    }
}
