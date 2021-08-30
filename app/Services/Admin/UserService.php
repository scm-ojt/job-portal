<?php

namespace App\Services\Admin;

use App\Repositories\Admin\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->userRepository->index();
    }

    public function store($request)
    {
        return $this->userRepository->store($request);
    }

    public function update($request, $id)
    {
       return $this->userRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->userRepository->destroy($id);
    }

    public function active($request)
    {
      return $this->userRepository->active($request);
    }

    public function uploadFile($request, $id)
    {
        return $this->userRepository->uploadFile($request, $id);
    }
}