<?php

namespace App\Http\Controllers;

use App\Models\Raw;
use Cache;
use Socialite;

class InstagramController extends Controller
{

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('instagram')->scopes(['public_content'])->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('instagram')->user();
        session(['ig_user_token' => $user->token]);
        return redirect('/ig/hashtag');
    }

    public function hashtag()
    {
        dd(session('ig_user_token'));
        $response = Cache::remember('liked', 60, function () {
            return json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/liked?access_token=' . session('ig_user_token')));
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
}
