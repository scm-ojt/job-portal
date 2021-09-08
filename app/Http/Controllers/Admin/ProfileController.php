<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Services\Admin\ProfileService;

class ProfileController extends Controller
{
    private $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function edit($id)
    {
        $user = $this->profileService->getUserId($id);
        return view('admin.profile', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->profileService->update($request, $id);
        return redirect()->back();
    }

}
