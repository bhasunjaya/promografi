<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mall;
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
        $malls = Mall::latest()->get();
        // return $malls;
        $recent = Post::with('category', 'malls')
            ->publish()
            ->latest()
            ->take(8)
            ->get();
        // return $featured;
        return view('page.index', compact('malls', 'recent'));
    }

    public function category($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        $posts = Post::with('category', 'malls')
            ->publish()
            ->latest()
            ->whereCategoryId($category->id)
            ->paginate(12);
        return view('page.category', compact('category', 'posts'));
    }

    public function categories()
    {
        $categories = Category::all();
        // return $categories;
        return view('page.categories', compact('categories'));
    }

    public function malls()
    {
        $malls = Mall::latest()->get();
        return view('page.malls', compact('malls'));

    }
    public function mall($slug)
    {
        $mall = Mall::whereSlug($slug)->firstOrFail();
        $posts = $mall->posts()
            ->with('category', 'malls')
            ->publish()
            ->latest()
            ->paginate(12);

        // return $posts;
        return view('page.mall', compact('mall', 'posts'));
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
