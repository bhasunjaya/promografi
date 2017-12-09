<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Mall;
use App\Models\Post;
use App\Models\Raw;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(1);
        return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $raw = [];
        if ($request->rid) {
            $raw = Raw::find($request->rid);
        }
        $malls = Mall::orderBy('title')->get();
        $categories = Category::pluck('title', 'id');
        $post = new Post;
        return view('backend.post.create', compact('raw', 'post', 'categories', 'malls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->start_at = $request->start_at;
        $post->end_at = $request->end_at;
        $post->is_publish = $request->get('is_publish', 0);

        if ($request->hasFile('image')) {
            $fname = str_slug($post->title . ' ' . $request->image->getClientOriginalName());
            $extension = $request->image->extension();
            $path = $request->image->storeAs('promo', $fname . '.' . $extension, 'uploads');
            $post->image = asset('uploads/' . $path);
        } elseif ($request->rid) {
            $raw = Raw::find($request->rid);
            $post->image = $raw->image;
            $post->raw_id = $request->rid;

            // update raw menjadi sudah terproses
            $raw->is_exported = true;
            $raw->save();
            $post->source = $raw->source;
        }

        $post->save();

        //malls
        if ($request->malls) {
            $post->malls()->sync($request->malls);
        }
        return redirect('backend/post')->withMessage('Data Telah Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $malls = Mall::orderBy('title')->get();
        $categories = Category::pluck('title', 'id');
        return view('backend.post.edit', compact('post', 'categories', 'malls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);
        // return $request->all();
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->start_at = $request->start_at;
        $post->end_at = $request->end_at;
        $post->is_publish = $request->get('is_publish', 0);

        if ($request->hasFile('image')) {
            $fname = str_slug($post->title . ' ' . $request->image->getClientOriginalName());
            $extension = $request->image->extension();
            $path = $request->image->storeAs('promo', $fname . '.' . $extension, 'uploads');
            $post->image = asset('uploads/' . $path);
        }

        $post->save();

        //malls
        if ($request->malls) {
            $post->malls()->sync($request->malls);
        }
        return redirect('backend/post')->withMessage('Data "' . $post->title . '" Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return $post;
    }
}
