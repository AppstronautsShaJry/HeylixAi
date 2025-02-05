<?php

namespace App\Http\Controllers;

use App\Models\FacebookPage;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function facebook() {
        $pages = FacebookPage::all();
        return view('pages.platform.facebook')->with('pages', $pages);
    }
    public function instagram() {
        return view('pages.platform.instagram');
    }
    public function twitter() {
        return view('pages.platform.twitter');
    }
    public function linkedin()
    {
        return view('pages.platform.linkedin');
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

