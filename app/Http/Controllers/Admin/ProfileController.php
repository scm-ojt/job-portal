<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('admin.admin-dashboard');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.profile', compact('user','roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:8',
            'role_id' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $user = User::findOrFail($id);

        if($request->hasFile('photo')){
            Storage::delete('/public/user-photos/'.$user->photo);
            $photo = $request->file('photo'); 
            $photoName = $photo->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public/user-photos',$photoName);
            $user->photo = $photoName ;
        }
        $user->name = $request->name;
        $user->role_id = $request->role_id;

        if($request->password != $user->password){
            $user->password = Hash::make($request->password);
        }
        $user->update();

        return redirect('admin/dashboard');
    }

}
