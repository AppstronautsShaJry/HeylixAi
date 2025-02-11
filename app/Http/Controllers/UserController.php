<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.authentication.index', compact('users'));
    }

    public function assignRole(Request $request, User $user)
    {
        $role = $request->input('role');
        $user->syncRoles([$role]);
        return redirect()->back()->with('success', 'Role updated successfully');
    }
}

