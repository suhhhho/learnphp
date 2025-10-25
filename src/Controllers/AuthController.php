<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerForm()
    {
        view('auth/register');        
    }

    public function register(){
        dump($_POST);
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if($user || $_POST['password'] !== $_POST['password_confirm']) {
           return redirect('/register');
        }
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
        redirect('/login');
    }

    public function loginForm() {
        view('auth/login');
    }

    public function login() {
        dump($_POST);
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if(!$user || !password_verify($_POST['password'], $user->password)){
            return redirect('/login');
        }
        $_SESSION['userId'] = $user->id;
        redirect('/');
    }

    public function logout() {
        unset($_SESSION['userId']);
        redirect('/');
    }
}