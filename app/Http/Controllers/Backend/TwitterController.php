<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Raw;
use Cache;
use Socialite;
// use Illuminate\Http\Request;
use Twitter;

class TwitterController extends Controller
{

    public function index()
    {
        $likes = Cache::remember('fave', 60, function () {
            return Twitter::getFavorites();
        });

        foreach ($likes as $r) {
            if (object_get($r, 'entities.media')) {
                $media = object_get($r, 'entities.media')[0];
                $ins = [
                    'tipe' => 'twitter',
                    'image' => $media->media_url,
                    'author' => $r->user->screen_name,
                    'content' => $r->text,
                    'source' => 'https://twitter.com/' . $r->user->screen_name . '/status/' . $r->id_str,
                ];
                Raw::firstOrCreate(['unique_id' => $r->id_str], $ins);
            }

        }

        return redirect()->route('raw.index');

    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();
        dd($user);
        // $user->token;
    }
}
