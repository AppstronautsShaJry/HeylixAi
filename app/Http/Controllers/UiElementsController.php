<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiElementsController extends Controller
{
    public function alerts()
    {
        return view('pages.apps.sweet-alerts');
    }
}
