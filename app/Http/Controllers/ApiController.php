<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function indexAction()
    {
        return view('index');
    }

       public function newsAction()
    {
        return view('news');
    }

       public function news1Action()
    {
        return view('news1');
    }

    public function news2Action()
    {
        return view('news2');
    }

    public function news3Action()
    {
        return view('news3');
    }
	 public function regerAction()
    {
        return view('reger');
    }
	
}
