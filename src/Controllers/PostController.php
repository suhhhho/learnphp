<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController
{
    public function __construct()
    {
        if(!auth()){
            redirect('/login');
            die;
        }
    }

    public function index()
    {
        $posts = Post::all();
        dump($posts);
        view('posts/index', compact('posts'));
    }

    public function create() {
        view('posts/create');
    }

    public function store() {
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/posts');
    }

    public function view() {
        $post = Post::find($_GET['id']);
        view('posts/view', compact('post'));
    }

    public function edit(){
        $post = Post::find($_GET['id']);
        view('posts/edit', compact('post'));
    }

    public function update() {
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/posts');
    }

    public function destroy(){
        $post = Post::find($_GET['id']);
        $post->delete();
        redirect('/posts');
    }
}