<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Services\Admin\ContactService;

class ContactController extends Controller
{
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts =  $this->contactService->index();
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.contact-detail', compact('contact'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contactService->destroy($id);
        return redirect('admin/contacts')->with('success', 'Contact deleted successfully!');
    }

    public function search(Request $request)
    {
        $searchData = $request->search_data;
        $contacts = $this->contactService->search($searchData);

        return view('admin.contacts.index', compact('searchData', 'contacts'));
    }
}
