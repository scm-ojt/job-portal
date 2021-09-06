<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\Admin\ProfileService;

class ProfileController extends Controller
{
    private $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }
    public function dashboard()
    {
        $companyArr = $this->profileService->companyCount();
        $jobArr = $this->profileService->jobCount();
        return view('admin.admin-dashboard', compact('companyArr','jobArr'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.profile', compact('user','roles'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->profileService->update($request, $id);
        return redirect()->back();
    }

}
