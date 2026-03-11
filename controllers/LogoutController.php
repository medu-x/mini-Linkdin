<?php

class LogoutController
{
    public function logout()
    {
        session_destroy();
        header("Location: index.php?page=login");
        exit;
    }
}
