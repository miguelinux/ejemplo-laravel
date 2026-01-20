<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		return 'Post index';
	}
	public function create()
	{
		return 'Post create index';
	}
	public function categoria($post, $categoria = null)
	{
		if ($categoria)
			return "Post {$post}  de {$categoria} Controller";
		return 'Post con número ' . $post . ' Controller';
	}
}
