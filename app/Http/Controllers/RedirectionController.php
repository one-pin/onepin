<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RedirectionController
{
    public function handleGoogleLoginCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $appUser = User::where('email', $googleUser->getEmail())->first();
        if (!$appUser) {
            $appUser = new User();
            $appUser->username = $googleUser->getNickname();
            $appUser->email = $googleUser->getEmail();
            $appUser->password = bcrypt('burağğğğmza');
            $appUser->name = $googleUser->getName();
            $appUser->save();
        }

        Auth::login($appUser);
        return redirect('/');
    }

    public function handleGoogleRedirection(): RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        $redirectResponse =  Socialite::driver('google')->redirect();
        $redirectResponse->headers->add([
            'Referrer-Policy' => 'no-referrer-when-downgrade'
        ]);
        return $redirectResponse;
    }
}
