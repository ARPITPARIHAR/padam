<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Facades\Input;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::get();
        return view('admin.location-list', compact(['locations']));
    }

    public function add(){
        return view('admin.location-add');
    }

    public function update($id, $slug){
        $location = Location::where('id', $id)->first();
        return view('admin.location-update', compact(['location']));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        
        $title = strtolower(trim($request->title));
        $string = str_replace(' ', '-', $title);
        $slug = preg_replace('/[^a-z0-9-]/', '', $string);
        
        if(!$request->id && Location::where('slug', $slug)->exists()){
            Session::flash('error', __('Location with the same title already exists! Please choose a unique location title.'));
            return Redirect::back()->withInput($request->input());
        }else{
            if(Location::where('slug', $slug)->where('id', '!=', $request->id)->exists()){
                Session::flash('error', __('Location with the same title already exists! Please choose a unique location title.'));
                return Redirect::back()->withInput($request->input());
            }
        }
        
        $location = Location::updateOrCreate(
            ["id" => $request->id],
            ["title" => $request->title,
            "slug" => $slug,
        ]);

        if ($location) {
            if($request->id){
                Session::flash('success', __('Location has been updated successfully.'));
            }else{
                Session::flash('success', __('Location has been added successfully.'));                
            }
            return redirect()->route('admin.location.list');

        } else {
            Session::flash('error', __('Something went wrong! Please try again.'));
            return Redirect::back()->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function destroy($id){
        if (Location::where('id', $id)->delete()) {
            Session::flash('success', __('Location deleted successfully'));
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

    public function activityStatus($id, $status){
        $updateStatus = $status == 1 ? 0 : 1 ;
        $find = Location::where('id', $id)->first();
        if($find){
            $result = $find->update(['status' => $updateStatus]);
            if($result){
                return response()->json([
                    'success' => true,
                    'changedStatus' => $updateStatus,
                    'message' => 'Status changed.',
                ]);
            }
        }
        
    }
}