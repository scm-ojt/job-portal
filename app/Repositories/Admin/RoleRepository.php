<?php

namespace App\Repositories\Admin;

use App\Models\Role;

class RoleRepository 
{
    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function index()
    {
        return $this->role->all();
    }
}