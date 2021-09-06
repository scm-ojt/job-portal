<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('admin.change-password', compact('user'));
    }

    public function changePassword(ChangePasswordRequest $request, $id)
    {
        $user = User::findOrFail($id);
        
        if(Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->update();
        }else {
            return redirect()->back()->with('success', 'Your old password is wrong!');
        }

        return redirect()->back()->with('success', 'You have change your password successfully!');
    }
}
