<?php

namespace App\Services\Admin;

use App\Repositories\Admin\ProfileRepository;

class ProfileService
{
    protected $profileRepository;

    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function update($request, $id)
    {
        return $this->profileRepository->update($request, $id);
    }
}