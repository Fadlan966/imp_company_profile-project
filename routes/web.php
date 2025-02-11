<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\FAQ;
use App\Models\Division;
use App\Models\Member;
use App\Models\Milestone;
use App\Models\Work;
use App\Models\Product;
use App\Models\ProjectTheme;
use App\Http\Controllers\formContactUsController;
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
    return view('Admin.portofolio', [
        'works' => Work::paginate(9),
        'products' => Product::all(),
    ]);
});
Route::get('/contact-us-admin', function () {
    return view('Admin.contact_us', [
        'services' => Service::all(),
        'project_themes' => ProjectTheme::all(),
        'faqs' => FAQ::all(),
    ]);
});

Route::get('/homepage-admin', function () {
    return view('Admin.homepage',
    [
        'services' => Service::all(),
        'faqs' => FAQ::all(),
    ]
);
});

Route::get('/about-us-admin', function () {
    return view('Admin.about-us',
    [
        'divisions' => Division::all(),
        'members' => Member::all(),
        'milestones' => Milestone::all(),
    ]);
});

Route::post('/submit-form', [formContactUsController::class, 'store'])->name('contact_us.store');