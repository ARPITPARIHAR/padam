<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\CsrController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\User\UserProjectController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear/{command}', function ($command) {
    $response = Artisan::call($command);
    dd($response);
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [UserProjectController::class, 'home'])->name('user.home');
Route::get('/project', [UserProjectController::class, 'project'])->name('user.project');
Route::get('/about', [UserProjectController::class, 'about'])->name('user.about');
Route::get('/awards', [UserProjectController::class, 'awards'])->name('user.awards');
Route::get('/career', [UserProjectController::class, 'career'])->name('user.career');
Route::get('/clientele', [UserProjectController::class, 'clientele'])->name('user.clientele');
Route::get('/contact', [UserProjectController::class, 'contact'])->name('user.contact');
Route::get('/csr', [UserProjectController::class, 'csr'])->name('user.csr');
Route::get('/expertise', [UserProjectController::class, 'expertise'])->name('user.expertise');
Route::get('/index', [UserProjectController::class, 'index'])->name('user.index');
Route::get('/news', [UserProjectController::class, 'news'])->name('user.news');

Route::get('/admin/login', [HomeController::class, 'index'])->name('login');

Auth::routes();

Route::middleware(['isAdmin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');

    // Sector
    Route::get('/sector/list', [SectorController::class, 'index'])->name('admin.sector.list');
    Route::get('/sector/add', [SectorController::class, 'add'])->name('admin.sector.add');
    Route::get('/sector/update/{id}/{slug}', [SectorController::class, 'update'])->name('admin.sector.update');
    Route::post('/sector/store', [SectorController::class, 'store'])->name('admin.sector.store');
    Route::get('/sector/activity/status/{status}', [SectorController::class, 'activityStatus'])->name('admin.sector.status');
    Route::post('/sector/delete/{id}', [SectorController::class, 'destroy'])->name('admin.sector.delete');

    // Location
    Route::get('/location/list', [LocationController::class, 'index'])->name('admin.location.list');
    Route::get('/location/add', [LocationController::class, 'add'])->name('admin.location.add');
    Route::get('/location/update/{id}/{slug}', [LocationController::class, 'update'])->name('admin.location.update');
    Route::post('/location/store', [LocationController::class, 'store'])->name('admin.location.store');
    Route::get('/location/activity/status/{status}', [LocationController::class, 'activityStatus'])->name('admin.location.status');
    Route::post('/location/delete/{id}', [LocationController::class, 'destroy'])->name('admin.location.delete');

    // Project
    Route::get('/project/list', [ProjectController::class, 'index'])->name('admin.project.list');
    Route::get('/project/add', [ProjectController::class, 'add'])->name('admin.project.add');
    Route::get('/project/update/{id}/{slug}', [ProjectController::class, 'update'])->name('admin.project.update');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('admin.project.store');
    Route::post('/project/store/updated', [ProjectController::class, 'storeUpdated'])->name('admin.project.store.updated');
    Route::get('/project/activity/status/{status}', [ProjectController::class, 'activityStatus'])->name('admin.project.status');
    Route::post('/project/delete/{id}', [ProjectController::class, 'destroy'])->name('admin.project.delete');
    Route::post('/project/image/remove', [ProjectController::class, 'projectImageRemove']);



    Route::get('/news/list', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/add', [NewsController::class, 'create'])->name('admin.news.add');
    Route::post('/admin/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('admin/news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('admin/news/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::post('/news/delete/{id}', [NewsController::class, 'destroy'])->name('admin.news.delete');

    
    Route::get('/csr/list', [CsrController::class, 'index'])->name('admin.csr.index');
    Route::get('/csr/add', [CsrController::class, 'create'])->name('admin.csr.add');
    Route::post('/admin/csr/store', [CsrController::class, 'store'])->name('admin.csr.store');
    Route::get('admin/csr/edit/{id}', [CsrController::class, 'edit'])->name('admin.csr.edit');
    Route::put('admin/csr/update/{id}', [CsrController::class, 'update'])->name('admin.csr.update');
    Route::post('/csr/delete/{id}', [CsrController::class, 'destroy'])->name('admin.news.delete');
  
  
 
});