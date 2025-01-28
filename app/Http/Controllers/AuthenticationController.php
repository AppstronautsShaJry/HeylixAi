<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{

//    public function show()
//    {
//        return view('auth.signup');
//    }

    /**
     * Handle the signup request.
     */
    public function register(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirect to a success page or login page
        return redirect()->route('signin')->with('success', 'Account created successfully! Please log in.');
    }

    public function signupBasic()
    {
        return view('pages.authentication.signup-basic');
    }

//    public function show()
//    {
//        return view('signin'); // Replace 'signin' with the path to your Blade file, if it's in a subfolder
//    }

    /**
     * Handle the sign-in process.
     */
    public function login(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'username' => 'required|string', // Username is required
            'password' => 'required|string', // Password is required
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password]) ||
            Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            // Authentication passed
            $request->session()->regenerate();
            return redirect()->intended('/'); // Redirect to dashboard
        }

        // Authentication failed
        return back()->withErrors([
            'error' => 'Invalid username or password.', // Custom error message
        ])->withInput($request->except('password')); // Retain input except for password
    }


    /**
     * Logout the user.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('signin'); // Redirect to signin after logout
    }

    public function signinCover()
    {
        return view('pages.authentication.signin-cover');
    }
}
