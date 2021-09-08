<?php

namespace App\Services\Frontend;

use App\Repositories\Frontend\ContactRepository;
use App\Models\Contact;

class ContactService{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    
    public function store($request)
    {   
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;
    
        return $this->contactRepository->store($contact);
    }
}