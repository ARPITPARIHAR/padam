<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{


    public function create()
    {
        $participations = Category::paginate(5); // Example: Paginate with 10 contacts per page

        return view('backend.category.create', compact('participations'));
    }


    public function submit(Request $request)
    {


        $buyer = new Category();

        $buyer->category = $request->category;


        $buyer->save();

        return back()->with('success', ' Your submission submitted successfully');

    }

}
