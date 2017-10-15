<?php

namespace App\Http\Controllers;

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

        return $user->token;
    }
}
