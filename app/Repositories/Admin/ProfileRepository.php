<?php

namespace App\Repositories\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class profileRepository 
{
    protected $profile;

    public function __construct(User $profile)
    {
        $this->profile = $profile;
    }

    public function update($request, $id)
    {
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
        $user->update();
        return $user;
    }   
}