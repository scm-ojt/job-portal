<?php

namespace App\Services\Admin;

use App\Repositories\Admin\RoleRepository;

class RoleService
{
    protected $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        return $this->roleRepository->index();
    }
}