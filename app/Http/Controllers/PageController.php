<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $featured = Post::with('category', 'malls')
            ->publish()
            ->latest()
            ->featured()
            ->take(3)
            ->get();

        $recent = Post::with('category', 'malls')
            ->publish()
            ->latest()
            ->take(12)
            ->get();
        // return $featured;
        return view('page.index', compact('featured', 'recent'));
    }

    public function category($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();

        $posts = Post::with('category', 'malls')
            ->publish()
            ->latest()
            ->whereCategoryId($category->id)
            ->get();
        return view('page.category', compact('category', 'posts'));
    }

    public function categories()
    {

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
