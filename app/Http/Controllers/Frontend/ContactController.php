<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function submit(Request $request)
    {


        $buyer = new Contact;

        $buyer->name = $request->name;
        $buyer->email = $request->email;
        $buyer->message = $request->message;

        $buyer->save();

        return back()->with('success', ' Your submission submitted successfully');

    }


    public function index()
    {

        $samples = Contact::all();

        // Pass data to the view
        return view('backend.contact.index', compact('samples'));
    }


}
