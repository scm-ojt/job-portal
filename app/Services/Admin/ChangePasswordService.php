<?php

namespace App\Services\Admin;

use App\Models\User;
use App\Repositories\Admin\ChangePasswordRepository;

class ChangePasswordService
{
    protected $changePasswordRepository;

    public function __construct(ChangePasswordRepository $changePasswordRepository)
    {
        $this->changePasswordRepository = $changePasswordRepository;
    }

    public function getUserId($id)
    {
        return User::findorFail($id);
    }
    
    public function update($request, $id)
    {
        $user = $this->getUserId($id);
        return $this->changePasswordRepository->update($request, $user);
    }
}