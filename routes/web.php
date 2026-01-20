<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\PostController;

Route::get('/', HomeControler::class);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create']);

Route::get('/post/{post}/{categoria?}', [PostController::class, 'categoria']);
