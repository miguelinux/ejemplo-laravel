<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hola Mundo';
});

Route::get('/post', function () {
    return 'Post';
});

Route::get('/post/{post}/{categoria?}', function ($post, $categoria = null) {
    if ($categoria)
	return "Post {$post}  de {$categoria}";
    return 'Post con número ' . $post;
});
