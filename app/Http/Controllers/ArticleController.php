<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show()
	{
		return Article::all();
	}
	public function search($title)
	{
		return Article::where('title', 'like', '%'.$title.'%')->get();
	}
}
