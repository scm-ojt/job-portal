<?php

namespace App\Services\Admin;

use App\Repositories\Admin\ContactRepository;

class ContactService
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        return $this->contactRepository->index();
    }

    public function destroy($id)
    {
        return $this->contactRepository->destroy($id);
    }
}