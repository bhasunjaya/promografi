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
        $raws = Raw::paginate(20);
        return view('backend.raw.index', compact('raws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response = Cache::remember('liked', 60, function () {
            return json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/liked?access_token=' . env('INSTAGRAM_TOKEN')));
        });
        $insert = [];
        foreach ($response->data as $r) {
            Raw::firstOrCreate(['unique_id' => $r->id], [
                'tipe' => 'ig',
                'image' => $r->images->standard_resolution->url,
                'author' => $r->user->username,
                'content' => $r->caption->text,
                'source' => $r->link,
            ]);
        }
        return response()->json($insert);
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
    public function show($id)
    {
        //
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
