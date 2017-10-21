<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mall;
use Illuminate\Http\Request;

class MallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malls = Mall::all();
        return view('backend.mall.index', compact('malls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mall = new Mall;
        return view('backend.mall.create', compact('mall'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '';
        if ($request->hasFile('image')) {
            $path = $request->image->store('malls', 'uploads');
        }
        $mall = new Mall;
        $mall->title = $request->title;
        $mall->description = $request->description;
        $mall->image = $path;
        $mall->city = $request->city;
        $mall->save();

        return redirect('backend/mall')->withMessage('Data Mall Sudah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mall $mall)
    {
        return view('backend.mall.show', compact('mall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mall $mall)
    {
        return view('backend.mall.edit', compact('mall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mall $mall)
    {
        $path = '';
        if ($request->hasFile('image')) {
            $path = $request->image->store('malls', 'uploads');
            $mall->image = $path;
        }
        $mall->title = $request->title;
        $mall->description = $request->description;
        $mall->city = $request->city;
        $mall->save();

        return redirect('backend/mall')->withMessage('Data Mall ' . $mall->title . ' Sudah Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mall $mall)
    {
        $mall->delete();
        return $mall;
    }
}
