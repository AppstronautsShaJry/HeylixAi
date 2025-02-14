<?php

namespace App\Http\Controllers;

use App\Models\FacebookPage;
use App\Models\SocialAccount;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function facebook() {
        $pages = SocialAccount::where('platform', 'facebook')->get();
        return view('pages.platform.facebook')->with('pages', $pages);
    }
    public function instagram() {
        $pages = SocialAccount::where('platform', 'instagram')->get();
        return view('pages.platform.instagram')->with('pages', $pages);
    }
    public function twitter() {
        $pages = SocialAccount::where('platform', 'twitter')->get();

        return view('pages.platform.twitter')->with('pages', $pages);
    }
    public function linkedin()
    {
        $pages = SocialAccount::where('platform', 'linkedin')->get();
        return view('pages.platform.linkedin')->with('pages', $pages);
    }

    public function authFacebook()
    {
        return view('pages.platform.auth.facebook');
    }
    public function authInstagram()
    {
        return view('pages.platform.auth.instagram');
    }
    public function authTwitter()
    {
        return view('pages.platform.auth.twitter');
    }
    public function authLinkedin()
    {
        return view('pages.platform.auth.linkedin');
    }
}

