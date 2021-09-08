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
        return $this->contact->where('name', 'Like', "%".request('search')."%")->orderBy('id', 'DESC')->paginate(10);
    }

    public function destroy($contact)
    {
        $contact->delete();
    }
}