<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('pages.brands.create');
    }
    public function manage()
    {
        return view('pages.brands.manage');
    }
    public function edit()
    {
        return view('pages.brands.edit');
    }
}
