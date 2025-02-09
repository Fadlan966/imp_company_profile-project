<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// user
Route::get('/', function () {
    return view('homepage');
});
Route::get('/portofolio', function () {
    return view('User.portofolio');
});
Route::get('/contact-us', function () {
    return view('User.contact_us');
});

Route::get('/homepage', function () {
    return view('User.homepage');
});

Route::get('/about-us', function () {
    return view('User.about-us');
});

// admin

Route::get('/portofolio-admin', function () {
    return view('Admin.portofolio');
});
Route::get('/contact-us-admin', function () {
    return view('Admin.contact_us');
});

Route::get('/homepage-admin', function () {
    return view('Admin.homepage');
});

Route::get('/about-us-admin', function () {
    return view('Admin.about-us');
});


Route::get('/open-email', function (\Illuminate\Http\Request $request) {
    $url = $request->query('url');
    return "<script>window.open(decodeURIComponent('$url'), '_blank'); window.close();</script>";
})->name('open-email');
