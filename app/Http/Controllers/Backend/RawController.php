<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Raw;
use Goutte\Client;
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

        // return date('Y-m-d H:i:s', 1512728407);

        $client = new Client();
        // $crawler = $client->request('GET', 'https://www.instagram.com/supermalkarawaci/');
        // $scripts = $crawler->filter('script');
        // $htmls = [];
        // foreach ($scripts as $s) {
        //     $htmls[] = $s->ownerDocument->saveHTML($s);
        // }

        // $text = $htmls[2];
        // $text = str_replace('<script type="text/javascript">window._sharedData = ', '', $text);
        // $text = str_replace(';</script>', '', $text);
        // $json = json_decode($text);
        // return response()->json($json);

        $raws = Raw::latest()->paginate(20);
        return view('backend.raw.index', compact('raws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $medias = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . env('INSTAGRAM_TOKEN')));
        // dd($medias->data);
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
