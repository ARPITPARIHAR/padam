<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
class FormController extends Controller
{
    public function submit(Request $request)
    {


        $buyer = new Form;

        $buyer->name = $request->name;
        $buyer->email = $request->email;
        $buyer->number = $request->number;
        $buyer->address = $request->address;

        $buyer->message = $request->message;
        if ($request->hasFile('video')) {
            $fileName = time() . '-logo-' . $request->file('video')->getClientOriginalName();
            $filePath = $request->file('video')->storeAs('uploads/videos', $fileName, 'public');
            $buyer->video = '/public/storage/' . $filePath;
        }
        $buyer->save();

        return back()->with('success', ' Your submission submitted successfully');

    }

}
