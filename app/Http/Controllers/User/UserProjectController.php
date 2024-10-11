<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\Location;
use App\Models\Project;
use Illuminate\Support\Facades\Session;
use Redirect;

class UserProjectController extends Controller
{
    public function home(){
        return view('user.index');
    }
    public function project(Request $request){
        $sectors = Sector::where('status', 1)->get();
        $locations = Location::where('status', 1)->get();

        $projectss = Project::leftJoin('sectors', 'sectors.id', '=', 'projects.sectorId')
                                ->leftJoin('locations', 'locations.id', '=', 'projects.locationId')
                                ->select('locations.title as locationTitle', 'sectors.title as sectorTitle', 'projects.id', 'projects.featuredImage', 'projects.image', 'projects.slug', 'projects.title', 'projects.area');
                                // ->get();

        if($request->query('sector')){
            $projectss = $projectss->where('sectors.slug', $request->query('sector'));
        }
        if($request->query('location')){
            $projectss = $projectss->where('locations.slug', $request->query('location'));
        }

        if(($request->query('areaMin')=='') && $request->query('areaMax')){
            $projectss = $projectss->where('projects.area', '<=', $request->query('areaMax'));
        }

        if($request->query('areaMin') && ($request->query('areaMax')=='')){
            $projectss = $projectss->where('projects.area', '>=', $request->query('areaMin'));
        }

        if($request->query('areaMin') && $request->query('areaMax')){
            $projectss = $projectss->whereBetween('projects.area', [$request->query('areaMin'), $request->query('areaMax')]);
        }

        $projects = $projectss->get();
        // echo '<pre>'; print_r($projects);exit; 

        $projectImages = [];
        if(!empty($projects)){
            foreach($projects as $project){
                $images = $project['image'] ? explode(',', $project['image']) : [];
                if(!empty($images)){
                    array_push($projectImages, $images);
                }
            }
        }
        // echo '<pre>'; print_r($projectImages);exit; 
        return view('user.project', compact(['projects', 'sectors', 'locations', 'projectImages']));
    }

    public function about(){
        return view('user.about');
    }

    public function awards(){
        return view('user.awards');
    }
    
    public function career(){
        return view('user.career');
    }

    public function clientele(){
        return view('user.clientele');
    }

    public function contact(){
        return view('user.contact');
    }

    public function csr(){
        return view('user.csr');
    }

    public function expertise(){
        return view('user.expertise');
    }

    public function index(){
        return view('user.index');
    }

    public function news(){
        return view('user.news');
    }
}