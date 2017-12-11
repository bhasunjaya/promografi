<?php

namespace App\Http\Controllers;

use Cache;
use DB;
use Illuminate\Http\Request;
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
        // dd($user);
        session(['ig_user_token' => $user->token]);
        return redirect('/ig/hashtag');
    }

    public function hashtag()
    {
        $medias = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/liked?access_token=' . session('ig_user_token')));
        // $medias = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . session('ig_user_token')));

        return response()->json($medias);

        $igdata = Cache::remember(session('ig_user_token'), 24 * 60, function () {
            return json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/liked?access_token=' . session('ig_user_token')));

        });
        // return response()->json($igdata);
        return view('instagram.hashtag', compact('igdata'));
    }

    public function post(Request $request)
    {
        $ada = DB::table('raws')->where('unique_id', $request->unique_id)->get()->count();
        if (!$ada) {

            DB::table('raws')->insert([
                'unique_id' => $request->unique_id,
                'image' => $request->image,
                'content' => $request->content,
                'author' => $request->author,
                'source' => $request->source,
            ]);

        }
        return redirect('ig/hashtag')->withNotification('promo created');
    }
}
