<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileDownloadController;



use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;


Route::get('/clear/{command}', function ($command) {
    $response = Artisan::call($command);
    dd($response);
});



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('participate', 'form')->name('form');
    Route::get('sample', 'sample')->name('sample');
    Route::get('product', 'product')->name('product');
    Route::get('fabric', 'fabric')->name('fabric');
    Route::get('garment', 'garment')->name('garment');
    Route::get('buyer', 'buyer')->name('buyer');
    Route::get('vendor', 'vendor')->name('vendor');
    Route::get('team', 'team')->name('team');
    Route::get('abouts', 'about')->name('abouts');
    Route::get('hostel-facility', 'hostel_facility')->name('hostelservice');

});


Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/form-submit', [FormController::class, 'submit'])->name('form.submit');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('login', [LoginController::class, 'adminlogin'])->name('login'); // Display login form

Route::post('/logins', [LoginController::class, 'login'])->name('login.submit'); // Process login form submission


Route::get('/registerform', [LoginController::class, 'registerform'])->name('registerform');
Route::post('/register', [LoginController::class, 'register'])->name('register.store');

Route::get('/training-events', [EventController::class, 'index'])->name('training.search');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::get('/download/{fileName}', [FileDownloadController::class, 'download'])->name('document.download');
