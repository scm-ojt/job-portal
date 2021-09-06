<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Admin\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = $this->userService->index();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->userService->update($request, $id);
        return redirect('admin/users')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userService->destroy($id);
        return redirect('admin/users')->with('success', 'User deleted successfully!');
    }

    public function active($id)
    {
        $this->userService->active($id); 
        return redirect()->back();
    }

    public function uploadFile(Request $request, $id)
    {
        $this->userService->uploadFile($request, $id);
        return back()->with('success', 'User photo have been successfully uploaded!');
    }

    public function search(Request $request)
    {
        $searchData = $request->search_data;
        $users = $this->userService->search($searchData);

        return view('admin.users.index', compact('searchData', 'users'));
    }
}
