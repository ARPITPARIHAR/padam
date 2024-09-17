<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{


    public function index()
    {
        $samples = Contact::paginate(10); // Example: Paginate with 10 contacts per page

        return view('backend.contact.index', compact('samples'));
    }

    public function delete(Request $request, $id)
    {
        $contact = Contact::find(($id));

        if (!$contact) {
            return redirect()->back()->with('error', 'Contact not found.');
        }

        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Contact deleted successfully.');
    }


}
