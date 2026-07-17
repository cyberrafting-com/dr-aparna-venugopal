<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SigninController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    //Artisan::call('key:generate');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/laparoscopic-appendix-surgery', function () {
    return view('services.laparoscopic-appendix-surgery');
})->name('services.laparoscopic-appendix-surgery');

Route::get('/laparoscopic-gall-bladder-surgery', function () {
    return view('services.laparoscopic-gall-bladder-surgery');
})->name('services.laparoscopic-gall-bladder-surgery');

Route::get('/hernia-repair', function () {
    return view('services.hernia-repair');
})->name('services.hernia-repair');

Route::get('/breast-lump-evaluation-surgery', function () {
    return view('services.breast-lump-evaluation-surgery');
})->name('services.breast-lump-evaluation-surgery');

Route::get('/piles-fissure-treatment', function () {
    return view('services.piles-fissure-treatment');
})->name('services.piles-fissure-treatment');

Route::get('/pilonidal-sinus-surgery', function () {
    return view('services.pilonidal-sinus-surgery');
})->name('services.pilonidal-sinus-surgery');

Route::get('/varicose-vein-surgery', function () {
    return view('services.varicose-vein-surgery');
})->name('services.varicose-vein-surgery');

Route::get('/lipoma-sebaceous-cyst-removal', function () {
    return view('services.lipoma-sebaceous-cyst-removal');
})->name('services.lipoma-sebaceous-cyst-removal');

Route::get('/lymph-node-biopsy', function () {
    return view('services.lymph-node-biopsy');
})->name('services.lymph-node-biopsy');

Route::get('/nail-surgery', function () {
    return view('services.nail-surgery');
})->name('services.nail-surgery');

Route::get('/ear-lobule-repair', function () {
    return view('services.ear-lobule-repair');
})->name('services.ear-lobule-repair');

Route::get('/wound-debridement', function () {
    return view('services.wound-debridement');
})->name('services.wound-debridement');

Route::get('/incision-and-drainage-of-abscesses', function () {
    return view('services.incision-and-drainage-of-abscesses');
})->name('services.incision-and-drainage-of-abscesses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');




