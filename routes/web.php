<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;

Route::get('/', [HomeControler::class, 'index']);

Route::get('/post', function () {
    return 'Post';
});

Route::get('/post/{post}/{categoria?}', function ($post, $categoria = null) {
    if ($categoria)
	return "Post {$post}  de {$categoria}";
    return 'Post con número ' . $post;
});
