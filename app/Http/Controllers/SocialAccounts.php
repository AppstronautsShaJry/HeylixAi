<?php

namespace App\Http\Controllers;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAccounts extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function showSocialAccounts()
    {
        $socialAccounts = auth()->user()->socialAccounts;
        return view('pages.platform.auth.facebook', compact('socialAccounts'));
    }

    // Handle Facebook callback
    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();

            // Find or create the user
            $user = User::where('email', $facebookUser->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $facebookUser->name,
                    'email' => $facebookUser->email,
                    'password' => encrypt('123456dummy'), // Use a secure password or generate one
                ]);
            }

            // Store or update social account details
            SocialAccount::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'platform' => 'facebook',
                ],
                [
                    'account_name' => $facebookUser->name,
                    'active_status' => true,
                    'connection_type' => 'Official', // or 'Non-Official'
                    'connection_status' => 'Connected',
                    'account_type' => 'Login', // or 'Profile'
                    'social_id' => $facebookUser->id,
                    'token' => $facebookUser->token,
                    'refresh_token' => $facebookUser->refreshToken,
                ]
            );

            // Log in the user
            Auth::login($user);

            return redirect()->intended('dashboard'); // Redirect to the dashboard or desired page
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Facebook login failed: ' . $e->getMessage());
        }
    }
}
