<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}


function dump(...$args)
{
    echo '<pre>';
    var_dump(...$args);
    echo '</pre>';
}

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $posts = [
            ['title' => 'World news 1', 'published' => '26.09.25', 'author' => 'Sofja', 'body' => 'Some world news 1'],
            ['title' => 'World news 2', 'published' => '25.09.25', 'author' => 'Portnova', 'body' => 'Some world news 2'],
            ['title' => 'World news 3', 'published' => '24.09.25', 'author' => 'Pets', 'body' => 'Some world news 3'],
            ['title' => 'World news 4', 'published' => '23.09.25', 'author' => 'Manivald', 'body' => 'Some world news 4'],
        ];
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        $posts = [
            ['title' => 'U.S news 1', 'published' => '26.09.25', 'author' => 'Sofja', 'body' => 'Some U.S news 1'],
            ['title' => 'U.S news 2', 'published' => '25.09.25', 'author' => 'Portnova', 'body' => 'Some U.S news 2'],
            ['title' => 'U.S news 3', 'published' => '24.09.25', 'author' => 'Pets', 'body' => 'Some U.S news 3'],
            ['title' => 'U.S news 4', 'published' => '23.09.25', 'author' => 'Manivald', 'body' => 'Some U.S news 4'],
        ];
        include __DIR__ . '/../views/us.php';
        break;
    default:
        http_response_code(404);
        echo '404 page not found';
}