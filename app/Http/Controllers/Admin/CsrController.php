<?php

namespace App\Http\Controllers\Admin;

use App\Models\Csr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class CsrController extends Controller
{
    public function index(){

  
        $csrs = Csr::all(); 
    return view('admin.csrlist', compact('csrs'));



        
    
}


    public function create(){
        return view('admin.csrcreate');

        
    
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'year' => 'nullable|string',
       
    ]);
    $csr = new Csr;
    $csr->name = $request->name;
    $csr->year = $request->year;
   
    $csr->save();
    Artisan::call('cache:clear');
    return back()->with('success', 'Csr added successfully.');
}

public function edit($id)
{
    // Find the news item by ID
    $csr = Csr::findOrFail($id); // Use findOrFail to handle not found cases

    // Return the edit view with the news item
    return view('admin.csrupdate', compact('csr'));
}

public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string',
        'year' => 'nullable|string',
    ]);

    // Find the CSR record by ID
    $csr = Csr::findOrFail($id);

    // Update the CSR record's fields
    $csr->name = $request->name;
    $csr->year = $request->year;

    // Save the changes
    $csr->save();

    // Clear the cache
    Artisan::call('cache:clear');

    // Redirect back with a success message
    return redirect()->route('admin.csr.index')->with('success', 'CSR updated successfully.');
}


public function destroy($id){
    if (Csr::where('id', $id)->delete()) {
        Session::flash('success', __('Project deleted successfully'));
        return response()->json([
            'success' => true,
            'message' => 'Deleted successfully',
        ]);
    } else {
        Session::flash('error', __('Something went wrong! Try again.'));
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong! Try again.',
        ]);
    }
}

}
