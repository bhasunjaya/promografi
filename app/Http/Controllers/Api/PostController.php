<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
    public function index(Request $request)
    {
        $oPost = Post::with('category', 'malls')
            ->latest();
        if ($request->get('q')) {
            $oPost->where('title', 'LIKE', "%" . $request->q . "%");
        }
        $posts = $oPost->paginate(5);
        return $posts;
        // return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category_id' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);

        $post = new Post;
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->start_at = date('Y-m-d', strtotime($request->start_at));
        $post->end_at = date('Y-m-d', strtotime($request->end_at));
        $post->raw_id = $request->raw_id;
        $post->is_featured = $request->is_featured;
        $post->is_online = 0;
        $post->is_publish = $request->is_publish;
        // $post->save();

        // $post->malls()->sync($request->malls);

        $raw = Raw::find($request->raw_id);
        $raw->is_read = 1;
        $raw->save();

        return $post;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->load('malls');
        $post->load('category');

        $selected = [];
        foreach ($post->malls as $r) {
            $selected[] = $r->id;
        }
        $post->range = ['from' => $post->start_at, 'to' => $post->end_at];
        $post->selectedmalls = $selected;
        return $post;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'category_id' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);

        $excepts = $request->only([
            'category_id',
            'title',
            'excerpt',
            'content',
            'image',
            'start_at',
            'end_at',
            'raw_id',
            'is_featured',
            'is_online',
            'is_publish',
        ]);

        foreach ($excepts as $k => $v) {
            $post->$k = $v;
        }

        $post->save();
        return $post;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
