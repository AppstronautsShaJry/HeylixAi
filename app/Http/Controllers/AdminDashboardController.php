<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function admin()
    {
        return view('pages.dashboards.admin');
    }
}
