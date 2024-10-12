<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{

    public function index()
    {
        
        $news = News::all(); 
    return view('admin.newslist', compact('news'));
    }
    

    public function create(){
        return view('admin.newscreate');

        }
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string',
                'description' => 'nullable|string',
                'link' => 'nullable|url', // Validate the hyperlink
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $banners = new News;
            $banners->name = $request->name;
            $banners->description = $request->description;
            $banners->link = $request->link; // Save the hyperlink
            if ($request->hasFile('image')) {
                $fileName = time() . '-image-' . $request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->storeAs('uploads/news', $fileName, 'public');
                $banners->image = '/public/storage/' . $filePath;
            }
            $banners->save();
            Artisan::call('cache:clear');
            return back()->with('success', 'News  added successfully.');
        }


        public function edit($id)
        {
            // Find the news item by ID
            $news = News::findOrFail($id); // Use findOrFail to handle not found cases
    
            // Return the edit view with the news item
            return view('admin.newsupdate', compact('news'));
        }

        public function update(Request $request, $id)
        {
            // Validate the request
            $request->validate([
                'name' => 'required|string',
                'description' => 'nullable|string',
                'link' => 'nullable|url', // Validate the hyperlink
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional during update
            ]);
        
            // Find the news item by ID
            $news = News::findOrFail($id);
        
            // Update the news properties
            $news->name = $request->name;
            $news->description = $request->description;
            $news->link = $request->link; // Update the hyperlink
        
            // Check if an image file was uploaded and handle the upload
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($news->image) {
                    $oldImagePath = public_path($news->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                
                // Store the new image
                $fileName = time() . '-image-' . $request->file('image')->getClientOriginalName();
                $filePath = $request->file('image')->storeAs('uploads/news', $fileName, 'public');
                $news->image = '/public/storage/' . $filePath;
            }
        
            // Save the changes
            $news->save();
        
            // Clear the cache
            Artisan::call('cache:clear');
        
            // Redirect back with success message
            return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
        }
        


public function destroy($id){
    if (News::where('id', $id)->delete()) {
        Session::flash('success', __('News deleted successfully'));
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