<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $posts = [
            ['title' => 'World news 1', 'published' => '26.09.25', 'author' => 'Sofja', 'body' => 'Some world news 1'],
            ['title' => 'World news 2', 'published' => '25.09.25', 'author' => 'Portnova', 'body' => 'Some world news 2'],
            ['title' => 'World news 3', 'published' => '24.09.25', 'author' => 'Pets', 'body' => 'Some world news 3'],
            ['title' => 'World news 4', 'published' => '23.09.25', 'author' => 'Manivald', 'body' => 'Some world news 4'],
        ];
        view('index', compact('posts'));
    }

    public function us()
    {
        $posts = [
            ['title' => 'U.S news 1', 'published' => '26.09.25', 'author' => 'Sofja', 'body' => 'Some U.S news 1'],
            ['title' => 'U.S news 2', 'published' => '25.09.25', 'author' => 'Portnova', 'body' => 'Some U.S news 2'],
            ['title' => 'U.S news 3', 'published' => '24.09.25', 'author' => 'Pets', 'body' => 'Some U.S news 3'],
            ['title' => 'U.S news 4', 'published' => '23.09.25', 'author' => 'Manivald', 'body' => 'Some U.S news 4'],
        ];
        view('us', compact('posts'));
    }
}