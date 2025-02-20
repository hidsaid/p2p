<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //

    public function redirectTo42()
    {
        $client_id = env('42_CLIENT_ID');
        $redirect_uri = env('42_REDIRECT_URI');
        $url = "https://api.intra.42.fr/oauth/authorize?client_id=u-s4t2ud-21de7770c8b188f3870d5520b929b5353f5904405b368c41d0a79582fb3e58a4&redirect_uri=http%3A%2F%2Flocalhost%3A8000%2Findex&response_type=code";
        return redirect($url);
    }

    public function handle42Callback()
    {
        try {
            // Get the user from 42 using Socialite
            $user = Socialite::driver('42')->user();
    
            // Look for the user in the database by their login
            $existingUser = User::where('login', $user->getNickname())->first();
    
            if ($existingUser) {
                // If the user already exists, log them in
                auth()->login($existingUser);
            } else {
                // If the user doesn't exist, create a new user
                $newUser = User::create([
                    'full_name' => $user->getName(),
                    'login' => $user->getNickname(),
                    'password' => bcrypt(""),
                    'image' => $user->getAvatar(),
                ]);
    
                auth()->login($newUser);
            }
    
            return redirect()->route('EnLanding');
        } catch (\Exception $e) {
            return redirect()->route('showLogin')->with('error', 'Failed to login with 42.');
        }
    }
    
}