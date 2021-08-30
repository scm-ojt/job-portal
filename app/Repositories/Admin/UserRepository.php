<?php

namespace App\Repositories\Admin;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserRepository 
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->paginate(10);
        return $users;
    }

    public function store($request)
    {
        $user = new User;
        if($request->hasFile('photo')){
            $photo = $request->file('photo'); 
            $photoName = $photo->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public/user-photos',$photoName);
            $user->photo = $photoName ;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); 
        $user->role_id = $request->role_id;    
        $user->save();

        if($user->role_id == 2){
            $company = new Company;
            $company->save();
            $user->companies()->attach($company->id);
        }

        return $user;
    }

    public function update($request, $id)
    {
        $user = User::findOrFail($id);
        if($request->hasFile('photo')){
            Storage::delete('/public/user-photos/'.$user->photo);
            $photo = $request->file('photo'); 
            $photoName = $photo->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public/user-photos',$photoName);
            $user->photo = $photoName;
        }
        $user->name = $request->name;
        $user->role_id = $request->role_id;

        if($request->password != $user->password){
            $user->password = Hash::make($request->password);
        }

        $user->update();
        return $user;
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $user->companies()->delete();
        return $user;
    }

    public function active($request)
    {
        $id = $request->user_id;
        $user = User::findOrFail($id);

        if($user->active_status == 1) {
            $user->active_status = 0;
            $user->update();
        }elseif($user->active_status == 0) {
            $user->active_status = 1;
            $user->update();
        }

        return $user;
    }
}