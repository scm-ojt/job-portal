<?php

namespace App\Services\Admin;

use App\Models\User;
use App\Repositories\Admin\ProfileRepository;
use Illuminate\Support\Facades\Storage;

class ProfileService
{
    protected $profileRepository;

    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function getUserId($id)
    {
        return User::findOrFail($id);
    }

    public function update($request, $id)
    {
        $user = $this->getUserId($id);

        if($request->hasFile('photo')){
            Storage::delete('/public/user-photos/'.$user->photo);
            $photo = $request->file('photo'); 
            $photoName = $photo->getClientOriginalName();
            $request->file('photo')->storeAs('public/user-photos',$photoName);
            $user->photo = $photoName ;
        }
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        
        return $this->profileRepository->update($user);
    }
}