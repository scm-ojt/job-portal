<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.profile', compact('user','roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->update();

        return redirect('admin/dashboard');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $user->companies()->delete();
        return redirect('admin/dashboard');
    }

}
