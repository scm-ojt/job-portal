<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Services\Admin\ChangePasswordService;

class ChangePasswordController extends Controller
{
    private $changePasswordService;

    public function __construct(ChangePasswordService $changePasswordService)
    {   
        $this->changePasswordService = $changePasswordService;
    }

    public function index($id)
    {
        $user = $this->changePasswordService->getUserId($id);
        return view('admin.change-password', compact('user'));
    }

    public function update(ChangePasswordRequest $request, $id)
    {
        $user = $this->changePasswordService->update($request, $id);
        if($user == true) {
            return redirect()->back()->with('success', 'You have change your password successfully!');  
        }else {
            return redirect()->back()->with('success', 'Your old password is wrong!');
        }   
    }
}
