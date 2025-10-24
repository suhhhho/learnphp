<?php

namespace App\Controllers;

class AuthController
{
    public function registerForm()
    {
        //setcookie('mycookie', 'tasty');
        dump($_COOKIE);
        session_start(['cookie_httponly' => true]);
        $_SESSION['secret'] = 'shhh';
        dump($_SESSION);
        
    }
}