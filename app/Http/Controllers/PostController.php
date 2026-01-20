<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		return view('post.index');
	}
	public function create()
	{
		return 'Post create index';
	}
	public function categoria($post, $categoria = null)
	{
		return view('post.categoria', compact('post','categoria'));
		//if ($categoria)
		//	return "Post {$post}  de {$categoria} Controller";
		//return 'Post con número ' . $post . ' Controller';
	}
}
