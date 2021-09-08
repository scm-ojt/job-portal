<?php

namespace App\Repositories\Admin;

use App\Models\Role;
use App\Models\User;

class UserRepository 
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
       return $this->user->where('name', 'Like', "%".request('search')."%")
       ->where('role_id', Role::COMPANY)->orderBy('id', 'DESC')->paginate(10);
    }

    public function update($user, $company)
    {
       $user->update();
       $company->update();
    }

    public function destroy($user)
    {
        $user->delete();
        $user->companies()->delete();
    }

    public function active($user)
    {
        if($user->active_status == 1) {
            $user->active_status = 0;
            $user->update();
        }elseif($user->active_status == 0) {
            $user->active_status = 1;
            $user->update();
        }
    }

    public function uploadFile($user)
    {
        return $user->update();
    }

}