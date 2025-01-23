<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function calender()
    {
        return view('pages.social.index');
    }

    public function post()
    {
        return view('pages.social.post');
    }
}
