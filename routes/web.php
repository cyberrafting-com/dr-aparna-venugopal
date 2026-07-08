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

Route::get('/services/laparoscopic-appendix-surgery', function () {
    return view('services.laparoscopic-appendix-surgery');
})->name('services.laparoscopic-appendix-surgery');

Route::get('/services/hernia-repair', function () {
    return view('services.hernia-repair');
})->name('services.hernia-repair');

Route::get('/services/piles-fissure-treatment', function () {
    return view('services.piles-fissure-treatment');
})->name('services.piles-fissure-treatment');

Route::get('/services/varicose-vein-surgery', function () {
    return view('services.varicose-vein-surgery');
})->name('services.varicose-vein-surgery');

Route::get('/services/lymph-node-biopsy', function () {
    return view('services.lymph-node-biopsy');
})->name('services.lymph-node-biopsy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');




