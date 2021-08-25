<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','admin']);
    }

    public function dashboard()
    {
        $users = User::all();
        return view('admin.admin-dashboard', compact('users'));
    }

}
