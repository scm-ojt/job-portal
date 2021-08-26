<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware(['auth','admin']);
    }
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $user->companies()->delete();
        return redirect('admin/users');
    }

    public function active(Request $request)
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
        
        return redirect()->back();
    }
}
