<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Raw;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function dummy(Request $request)
    {
        $raws = Raw::latest()->paginate(4);
        // return $raws;
        return view('page.dummy', compact('raws'));
    }

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
        $categories = Category::all();
        return view('page.categories', compact('categories'));
    }

    public function mall()
    {
        return view('page.mall');
    }

    public function detail($slug)
    {
        $post = Post::with('category', 'malls')
            ->whereSlug($slug)
            ->publish()
            ->firstOrFail();
        // return $post;
        return view('page.detail', compact('post'));
    }

    public function terms()
    {
        return view('page.terms');

    }
}
