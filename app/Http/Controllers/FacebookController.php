<?php

namespace App\Http\Controllers;

use App\Models\FacebookPage;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FacebookController extends Controller
{
    /**
     * Redirect the user to Facebook for authentication.
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(Request $request)
    {
        $facebookUser = Socialite::driver('facebook')->user();

        // Store Facebook access token securely
        $user = Auth::user();
        $user->facebook_token = encrypt($facebookUser->token);
        $user->facebook_token_expires_at = Carbon::now()->addDays(60); // long-lived token (60 days)
        $user->save();

        return redirect()->route('home')->with('success', 'Facebook connected!');
    }

    public function postToFacebook()
    {
        $user = Auth::user();
        $token = decrypt($user->facebook_token);

        $response = Http::post("https://graph.facebook.com/me/feed", [
            'message' => 'Hello from my Laravel app!',
            'access_token' => $token,
        ]);

        return response()->json($response->json());
    }
}
