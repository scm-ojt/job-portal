<?php

namespace App\Repositories\Admin;

use App\Models\User;

class profileRepository 
{
    protected $profile;

    public function __construct(User $profile)
    {
        $this->profile = $profile;
    }

    public function update($user)
    {
        $user->update();
    }   
}