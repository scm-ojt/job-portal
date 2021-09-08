<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Services\Frontend\ContactService;

class ContactController extends Controller
{
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        return view('frontend.contact-us');
    }

    public function store(ContactStoreRequest $request)
    {
        $this->contactService->store($request);
        return redirect('/contact-us')->with('success', 'Thank you!
        Your message has been successfully sent.');
    }  
}
