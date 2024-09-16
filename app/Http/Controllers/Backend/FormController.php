<?php

namespace App\Http\Controllers\Backend;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{


    public function index()
    {
        $participations = Form::paginate(15); // Example: Paginate with 10 contacts per page

        return view('backend.form.index', compact('participations'));
    }

    public function delete(Request $request, $id)
    {
        $contact = Form::find(($id));

        if (!$contact) {
            return redirect()->back()->with('error', 'Contact not found.');
        }

        $contact->delete();

        return redirect()->route('form.index')->with('success', 'Contact deleted successfully.');
    }


}
