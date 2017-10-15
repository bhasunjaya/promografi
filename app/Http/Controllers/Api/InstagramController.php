<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class InstagramController extends Controller
{

    public function index()
    {
        $response = [];
        $url = 'https://api.instagram.com/v1/users/self/media/liked?access_token=' . env('INSTAGRAM_TOKEN');
        $content = json_decode(file_get_contents($url));
        return response()->json($content);
    }
}
