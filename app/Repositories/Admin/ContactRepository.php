<?php

namespace App\Repositories\Admin;

use App\Models\Contact;

class ContactRepository 
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        return $this->contact->paginate(10);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return $contact;
    }
}