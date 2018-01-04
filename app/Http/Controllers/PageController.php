<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mall;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $malls = Mall::latest()->get();

        $missit = Post::with('category', 'malls')
            ->publish()
            ->whereRaw('end_at >= now()')
            ->orderBy('end_at', 'ASC')
            ->paginate(4);
        $featured = Post::with('category', 'malls')
            ->publish()
            ->take(4)
            ->where('is_featured', 1)
            ->latest()
            ->get();

        $recent = Post::with('category', 'malls')
            ->publish()
            ->latest()
            ->take(8)
            ->get();
        // return $featured;

        $frontpage = true;
        return view('page.index', compact('malls', 'recent', 'featured', 'missit', 'frontpage'));
    }

    public function promolist()
    {
        $posts = Post::with('category', 'malls')
            ->publish()
            ->latest()
            ->paginate(12);
        return view('page.promolist', compact('posts'));
    }
    public function hotpromo()
    {
        \DB::connection()->enableQueryLog();
        $posts = Post::with('category', 'malls')
            ->publish()
            ->whereRaw('end_at >= now()')
            ->orderBy('end_at', 'ASC')
        // ->latest()
            ->paginate(12);
        $queries = \DB::getQueryLog();
        // return $queries;
        return view('page.hotpromo', compact('posts'));
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
