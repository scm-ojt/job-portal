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
    public function __construct()
    {
        return $this->middleware(['auth','admin']);
    }

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
        $user = User::findOrFail($id);

        if($request->hasFile('photo')){
            Storage::delete('/public/user-photos/'.$user->photo);
            $photo = $request->file('photo'); 
            $photo_name = $photo->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public/user-photos',$photo_name);
            $user->photo = $photo_name ;
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
