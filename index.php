<?php
// Router — every request goes through here
require 'config/configBD.php';
require 'models/UserModel.php';
require 'controllers/AuthController.php';
require 'controllers/HomeController.php';
require 'controllers/LogoutController.php';
require 'controllers/ProfileController.php';
// start session
session_start();
// get page from url
$page = $_GET['page'] ?? 'login';

// router
match($page) {
    'login'     => (new AuthController())->login(),
    'register'  => (new AuthController())->register(),
    'home'      => (new HomeController())->index(),
    'logout'    => (new LogoutController())->logout(),
    'profile'   => (new ProfileController())->index(),
    default     => http_response_code(404),
};