<?php

namespace App\Repositories\Frontend;

class ContactRepository 
{
  public function store($contact)
  {
    $contact->save();
  }
}