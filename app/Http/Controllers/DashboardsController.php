<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    public function index()
    {
        return view('pages.dashboards.index');
    }
    public function aiTools()
    {
        return view('pages.dashboards.test');
    }
    public function social()
    {
        return view('pages.dashboards.test');
    }

    public function advertising()
    {
        return view('pages.dashboards.test');
    }

    public function seo()
    {
        return view('pages.dashboards.test');
    }

    public function assets()
    {
        return view('pages.dashboards.test');
    }

    public function brands()
    {
        return view('pages.dashboards.test');
    }


    public function website()
    {
        return view('pages.dashboards.test');
    }

    public function analytics()
    {
        return view('pages.dashboards.test');
    }

    public function credits()
    {
        return view('pages.dashboards.test');
    }

    public function heylix()
    {
        return view('pages.dashboards.test');
    }

    public function upgrade()
    {
        return view('pages.dashboards.test');
    }
    public function support()
    {
        return view('pages.dashboards.test');
    }


}
