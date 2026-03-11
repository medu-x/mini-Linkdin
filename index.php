<?php
// Router — every request goes through here
require 'config/configBD.php';
require 'models/UserModel.php';
require 'controllers/AuthController.php';
require 'controllers/DashboardController.php';
require 'controllers/LogoutController.php';
// start session
session_start();
// get page from url
$page = $_GET['page'] ?? 'login';

// router
match($page) {
    'login'     => (new AuthController())->login(),
    'register'  => (new AuthController())->register(),
    'dashboard' => (new DashboardController())->index(),
    'logout'    => (new LogoutController())->logout(),
    default     => http_response_code(404),
};