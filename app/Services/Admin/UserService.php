<?php

namespace App\Services\Admin;

use App\Models\Company;
use App\Models\User;
use App\Repositories\Admin\UserRepository;
use Illuminate\Support\Facades\Storage;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->userRepository->index();
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
            $user->photo = $photoName;
        }
        $user->name = $request->name;
        $user->role_id = $request->role_id;

        $companyId = $user->companies()->where('user_id',$user->id)->first()->id;
        $company = Company::findOrFail($companyId);
        $company->name = $request->name;
        
        return $this->userRepository->update($user, $company);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        return $this->userRepository->destroy($user);
    }

    public function active($id)
    {
        $user = $this->getUserId($id);
        return $this->userRepository->active($user);
    }

    public function uploadFile($request, $id)
    {
        $user =  $this->getUserId($id);
        if($request->hasFile('file')){
            $photo = $request->file('file'); 
            $photoName = $photo->getClientOriginalName();
            $request->file('file')->storeAs('public/user-photos',$photoName);
            $user->photo = $photoName;
        }
        return $this->userRepository->uploadFile($user);
    }

    public function search($searchData)
    {
        return $this->userRepository->search($searchData);
    }
}