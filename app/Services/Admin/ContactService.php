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

    public function getContactId($id)
    {
        return Contact::findOrFail($id);
    }
    
    public function destroy($id)
    {
        $contact = $this->getContactId($id);
        return $this->contactRepository->destroy($contact);
    }
}