<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(8);
        return view('backend.contacts.index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('backend.contacts.create');
    }

    public function store(CreateContactRequest $request)
    {
     $input = $request->only([
        'country','address','address_one','phone_number_one','phone_number_two',
        'phone_number_three','phone_number_four','email_one','email_two'
       ]);

       $result = Contact::create($input);

       if($result) {
            session()->flash('success', 'Contact Created Successfully!');
        } else {
            session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.contacts');

    }

    public function show(Contact $contact)
    {
        return view('backend.contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('backend.contacts.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
       $input = $request->only([
        'country','address','address_one','phone_number_one','phone_number_two',
        'phone_number_three','phone_number_four','email_one','email_two'
       ]);

       $result = $contact->update($input);

       if($result) {
            session()->flash('success', 'Contact Updated Successfully!');
        } else {
            session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.contacts');
    }

    public function delete(Contact $contact)
    {
        $result = $contact->delete();

         if($result) {
            session()->flash('success', 'Contact deleted Successfully!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }
         return redirect() -> route('backend.contacts') ;
    }


}
