<?php

namespace App\Services\Admin;

use App\Models\Contact;
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
        $contact = Contact::findOrFail($id);
        return $this->contactRepository->destroy($contact);
    }

    public function search($searchData)
    {
        return $this->contactRepository->search($searchData);
    }
}