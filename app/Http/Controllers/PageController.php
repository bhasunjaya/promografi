<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('page.index');
    }

    public function category()
    {
        return view('page.category');
    }

    public function mall()
    {
        return view('page.mall');
    }

    public function detail()
    {
        return view('page.detail');
    }
}
