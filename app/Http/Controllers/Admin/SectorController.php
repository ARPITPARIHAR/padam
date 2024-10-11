<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Facades\Input;

class SectorController extends Controller
{
    public function index(){
        $sectors = Sector::get();
        return view('admin.sector-list', compact(['sectors']));
    }

    public function add(){
        return view('admin.sector-add');
    }

    public function update($id, $slug){
        $sector = Sector::where('id', $id)->first();
        return view('admin.sector-update', compact(['sector']));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        
        $title = strtolower(trim($request->title));
        $string = str_replace(' ', '-', $title);
        $slug = preg_replace('/[^a-z0-9-]/', '', $string);
        
        if(!$request->id && Sector::where('slug', $slug)->exists()){
            Session::flash('error', __('Sector with the same title already exists! Please choose a unique title.'));
            return Redirect::back()->withInput($request->input());
        }else{
            if(Sector::where('slug', $slug)->where('id', '!=', $request->id)->exists()){
                Session::flash('error', __('Sector with the same title already exists! Please choose a unique title.'));
                return Redirect::back()->withInput($request->input());
            }
        }
        
        $sector = Sector::updateOrCreate(
            ["id" => $request->id],
            ["title" => $request->title,
            "slug" => $slug,
        ]);

        if ($sector) {
            if($request->id){
                Session::flash('success', __('Sector has been updated successfully.'));
            }else{
                Session::flash('success', __('Sector has been added successfully.'));                
            }
            return redirect()->route('admin.sector.list');

        } else {
            Session::flash('error', __('Something went wrong! Please try again.'));
            return Redirect::back()->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function destroy($id){
        if (Sector::where('id', $id)->delete()) {
            Session::flash('success', __('Sector deleted successfully'));
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
        $find = Sector::where('id', $id)->first();
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