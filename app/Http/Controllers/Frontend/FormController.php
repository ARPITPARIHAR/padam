<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Debugging: Check incoming request data
        // dd($request->all());

        // Create a new Form instance
        $buyer = new Form;

        // Assign request values to the Form model
        $buyer->name = $request->name;
        $buyer->email = $request->email;
        $buyer->number = $request->number;
        $buyer->age = $request->age;
        // Determine the category based on user input
        if ($request->game_category === 'custom' && !empty($request->custom_game_category)) {
            $buyer->category = $request->custom_game_category;
        } elseif (!empty($request->game_category)) {
            $buyer->category = $request->game_category;
        } else {
            // Handle case where no category is selected
            return back()->withErrors(['game_category' => 'Please select a category.']);
        }

        // Additional fields
        $buyer->link = $request->link;
        $buyer->message = $request->message;

        // Save the Form model
        $buyer->save();

        // Redirect back with a success message
        return back()->with('success', 'Your submission was submitted successfully');
    }
}
