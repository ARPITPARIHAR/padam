<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\Location;
use App\Models\Project;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::leftJoin('sectors', 'sectors.id', '=', 'projects.sectorId')
                            ->leftJoin('locations', 'locations.id', '=', 'projects.locationId')
                            ->select('locations.title as locationTitle', 'sectors.title as sectorTitle', 'projects.id', 'projects.featuredImage', 'projects.slug', 'projects.title', 'projects.area', 'projects.status', 'projects.created_at')
                            ->get();
        return view('admin.project-list', compact(['projects']));
    }

    public function add(){
        $sectors = Sector::where('status', 1)->get();
        $locations = Location::where('status', 1)->get();
        return view('admin.project-add', compact(['sectors', 'locations']));
    }

    public function update($id, $slug){
        $sectors = Sector::where('status', 1)->get();
        $locations = Location::where('status', 1)->get();
        $project = project::where('id', $id)->first();
        return view('admin.project-update', compact(['project', 'sectors', 'locations']));
    }

    public function store(Request $request){
        // echo'<pre>'; print_r($request->all()); exit;

        $request->validate([
            'title' => 'required|string|max:255',
            'locationId' => 'required',
            'sectorId' => 'required',
            'area' => 'required',
            'projectImages.*' => 'required|mimes:jpg,jpeg,png|max:5120',
            'featuredImage' => 'required|mimes:jpg,jpeg,png|max:5120',
        ]);
        
        $title = strtolower(trim($request->title));
        $string = str_replace(' ', '-', $title);
        $slug = preg_replace('/[^a-z0-9-]/', '', $string);
        
        if(Project::where('slug', $slug)->exists()){
            Session::flash('error', __('Project with the same title already exists! Please choose a unique project title.'));
            return Redirect::back()->withInput($request->input());
        }

        $projectImages = [];
        if ($request->hasFile('projectImages')) {
            foreach ($request->file('projectImages') as $projectImage) {
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($projectImage->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'media/project/image/';
                $image_url = $upload_path.$image_full_name;
                $projectImage->move($upload_path, $image_full_name);
                array_push($projectImages ,$image_url);
            }
        }

        $featuredImage = '';
        if ($request->hasFile('featuredImage')) {
            $file = $request->file('featuredImage');
            $image_name = md5(rand(1000,10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $uploade_path = 'media/project/featuredImage/';
            $image_url = $uploade_path.$image_full_name;
            $file->move($uploade_path,$image_full_name);
            $featuredImage = $image_url;
        }
        
        $project = Project::updateOrCreate(
            ["id" => $request->id],
            ["title" => $request->title,
            "locationId" => $request->locationId,
            "sectorId" => $request->sectorId,
            "area" => $request->area,
            "featuredImage" => $featuredImage,
            "image" => count($projectImages)>0 ? implode(',', $projectImages) : '',
            "slug" => $slug,
        ]);

        if ($project){
            Session::flash('success', __('Project has been added successfully.'));                
            return redirect()->route('admin.project.list');
        } else {
            Session::flash('error', __('Something went wrong! Please try again.'));
            return Redirect::back()->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function storeUpdated(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'locationId' => 'required',
            'sectorId' => 'required',
            'area' => 'required',
            // 'projectImages.*' => 'required|mimes:jpg,jpeg,png|max:5120',
            // 'featuredImage' => 'required|mimes:jpg,jpeg,png|max:5120',
        ]);

        $title = strtolower(trim($request->title));
        $string = str_replace(' ', '-', $title);
        $slug = preg_replace('/[^a-z0-9-]/', '', $string);
        
        if(Project::where('slug', $slug)->where('id', '!=', $request->id)->exists()){
            Session::flash('error', __('Project with the same title already exists! Please choose an unique project title.'));
            return Redirect::back()->withInput($request->input());
        }

        $projectImagePath = [];
        $fetchRecord = Project::where('id', $request['id'])->first();
        $projectImages = $fetchRecord['image'] ? explode(',', $fetchRecord['image']) : [];
        
        // project images
        if ($request->hasFile('projectImages')) {
            foreach ($request->file('projectImages') as $projectImage) {
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($projectImage->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'media/project/image/';
                $image_url = $upload_path.$image_full_name;
                $projectImage->move($upload_path, $image_full_name);
                array_push($projectImagePath ,$image_url);
            }
        }

        if(!empty($projectImages) && $projectImages !='' ){
            foreach($projectImages as $image){
                array_push($projectImagePath, $image);
            }
        }

        if(empty($projectImagePath)){
            Session::flash('error', __('Select an image.'));
            return redirect()->back()->withErrors(['image' => 'Select an image.'])->withInput();
        }

        // featured image
        $featuredImage = '';
        if ($request->hasFile('featuredImage')) {
            $file = $request->file('featuredImage');
            $image_name = md5(rand(1000,10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $uploade_path = 'media/project/featuredImage/';
            $image_url = $uploade_path.$image_full_name;
            $file->move($uploade_path,$image_full_name);
            $featuredImage = $image_url;
        }else{
            $featuredImage = $fetchRecord['featuredImage'];
        }

        if($featuredImage=='' || $featuredImage==null){
            Session::flash('error', __('Select an featured image.'));
            return redirect()->back()->withErrors(['featuredImage' => 'Select an featured image.'])->withInput();
        }
        
        $project = Project::updateOrCreate(
            ["id" => $request->id],
            ["title" => $request->title,
            "locationId" => $request->locationId,
            "sectorId" => $request->sectorId,
            "area" => $request->area,
            "featuredImage" => $featuredImage ? $featuredImage : '',
            "image" => (count($projectImagePath)>0) ? implode(',', $projectImagePath) : '',
            "slug" => $slug,
        ]);

        if ($project){
            Session::flash('success', __('Project has been updated successfully.'));                
            return redirect()->route('admin.project.list');
        } else {
            Session::flash('error', __('Something went wrong! Please try again.'));
            return Redirect::back()->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function projectImageRemove(Request $request){
        $id = $request->id;
        $columnName = $request->columnName;
        $removeImage = $request->imagename;
        $fetchData = Project::where('id', $id)->first();
        $explodeImages = $fetchData ? explode(',', $fetchData[$columnName]) : [];
        $imgArr = [];
        foreach($explodeImages as $image){
            if($image!==$removeImage){
                array_push($imgArr, $image);
            }
        }
        
        $image_path = public_path($removeImage);
        if(file_exists($image_path)) {
            File::delete($image_path);
        }
        $path = (!empty($imgArr)) ? implode(',', $imgArr) : '' ;
        $imageUpdate = Project::where('id', $id)->update([$columnName => $path]);
        if($imageUpdate){
            return response()->json(['status' => 'success', 'message' => 'Successfully removed'], 200);
        }else{
            return response()->json(['status' => 'failed', 'message' => 'Something went wrong! Try again.'], 500);
        }
    }

    public function destroy($id){
        if (Project::where('id', $id)->delete()) {
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

    public function activityStatus($id, $status){
        $updateStatus = $status == 1 ? 0 : 1 ;
        $find = Project::where('id', $id)->first();
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