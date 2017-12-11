<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Raw;
use Illuminate\Http\Request;

class RawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raws = Raw::latest()
            ->where('is_read', 0)
            ->paginate(20);
        return view('backend.raw.index', compact('raws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $medias = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?count=50&access_token=' . env('INSTAGRAM_TOKEN')));

        foreach ($medias->data as $r) {
            $raw = Raw::firstOrCreate(['unique_id' => $r->id], [
                'image' => $r->images->standard_resolution->url,
                'content' => object_get($r, 'caption.text', '-'),
                'author' => $r->user->username,
                'source' => $r->link,
            ]);

        }
        return redirect('backend/raw');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Raw $raw)
    {
        $raw->is_read = 1;
        $raw->save();
        return $raw;
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
    public function update(Request $request, $id)
    {
        //
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
