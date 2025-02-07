<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')
            ->stateless() // Add this to avoid session issues
            ->with(['prompt' => 'select_account']) // Forces account selection
            ->redirect();
    }


    public function callbackGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user(); // Add stateless()

            // Check if the user exists by Call ID or Email
            $user = User::where('google_id', $googleUser->id)
                ->orWhere('email', $googleUser->email)
                ->first();

            if ($user) {
                // Update Call ID if it wasn't stored previously
                if (!$user->google_id) {
                    $user->update(['google_id' => $googleUser->id]);
                }
            } else {
                // Create new user if not found
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => bcrypt(uniqid()), // Secure random password
                ]);
            }

            Auth::login($user);
            return redirect()->intended('/');

        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Something went wrong. Please try again.');
        }
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

}
