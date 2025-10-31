<?php

use App\Models\User;

// function dump(...$args)
// {
//     echo '<pre>';
//     var_dump(...$args);
//     echo '</pre>';
// }

// function dd(...$args) {
//     dump(...$args);
//     die;
// }

function view($viewName, $variables=[]) {
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}

function redirect($path) {
    header("Location: $path");
}

function auth() {
    if(isset($_SESSION['userId'])) {
        return User::find($_SESSION['userId']);
    }
    return false;
}