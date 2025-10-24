<?php

use App\Controllers\PostController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/us', [PublicController::class, 'us']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/answer', [PublicController::class, 'answer']);

Router::get('/posts', [PostController::class, 'index']);
Router::get('/posts/create', [PostController::class, 'create']);
Router::post('/posts', [PostController::class, 'store']);
Router::get('/posts/view', [PostController::class, 'view']);
Router::get('/posts/edit', [PostController::class, 'edit']);
Router::post('/posts/edit', [PostController::class, 'update']);
Router::get('/posts/delete', [PostController::class, 'destroy']);