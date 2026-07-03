<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
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
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/hearing-loss-treatment', function () {
    return view('services.hearing-loss-treatment');
})->name('hearing-loss-treatment');

Route::get('/ear-pain', function () {
    return view('services.ear-pain');
})->name('ear-pain');

Route::get('/ear-discharge', function () {
    return view('services.ear-discharge');
})->name('ear-discharge');

Route::get('/ear-blockage', function () {
    return view('services.ear-blockage');
})->name('ear-blockage');

Route::get('/micro-ear-surgeries', function () {
    return view('services.micro-ear-surgeries');
})->name('micro-ear-surgeries');

Route::get('/tympanoplasty', function () {
    return view('services.tympanoplasty');
})->name('tympanoplasty');

Route::get('/tympanoplasty-ossiculoplasty', function () {
    return view('services.tympanoplasty-ossiculoplasty');
})->name('tympanoplasty-ossiculoplasty');

Route::get('/mastoidectomy', function () {
    return view('services.mastoidectomy');
})->name('mastoidectomy');

Route::get('/ear-surgery', function () {
    return view('services.ear-surgery');
})->name('ear-surgery');

Route::get('/vertigo-treatment', function () {
    return view('services.vertigo-treatment');
})->name('vertigo-treatment');

Route::get('/foreign-bodies-in-the-ear', function () {
    return view('services.foreign-bodies-in-the-ear');
})->name('foreign-bodies-in-the-ear');

Route::get('/otoendoscopy', function () {
    return view('services.otoendoscopy');
})->name('otoendoscopy');

// Nose Services
Route::get('/sinus-surgery', function () {
    return view('services.sinus-surgery');
})->name('sinus-surgery');

Route::get('/functional-endoscopic-sinus-surgery', function () {
    return view('services.functional-endoscopic-sinus-surgery');
})->name('functional-endoscopic-sinus-surgery');

Route::get('/sino-nasal-polyps-treatment', function () {
    return view('services.sino-nasal-polyps-treatment');
})->name('sino-nasal-polyps-treatment');

Route::get('/plastic-surgery-of-nose', function () {
    return view('services.plastic-surgery-of-nose');
})->name('plastic-surgery-of-nose');

Route::get('/endoscopy-of-nose', function () {
    return view('services.endoscopy-of-nose');
})->name('endoscopy-of-nose');

Route::get('/nasal-endoscopy', function () {
    return view('services.nasal-endoscopy');
})->name('nasal-endoscopy');

Route::get('/sneezing-runny-nose', function () {
    return view('services.sneezing-runny-nose');
})->name('sneezing-runny-nose');

Route::get('/sinusitis', function () {
    return view('services.sinusitis');
})->name('sinusitis');

Route::get('/foreign-bodies-in-the-nose', function () {
    return view('services.foreign-bodies-in-the-nose');
})->name('foreign-bodies-in-the-nose');

Route::get('/septoplasty', function () {
    return view('services.septoplasty');
})->name('septoplasty');

Route::get('/nasal-bone-reduction', function () {
    return view('services.nasal-bone-reduction');
})->name('nasal-bone-reduction');

Route::get('/endoscopic-dcr', function () {
    return view('services.endoscopic-dacryocystorhinostomy');
})->name('endoscopic-dcr');

Route::get('/nose-surgery', function () {
    return view('services.nose-surgery');
})->name('nose-surgery');

// Throat Services
Route::get('/micro-surgeries-of-the-larynx', function () {
    return view('services.micro-surgeries-of-the-larynx');
})->name('micro-surgeries-of-the-larynx');

Route::get('/foreign-bodies-in-the-throat', function () {
    return view('services.foreign-bodies-in-the-throat');
})->name('foreign-bodies-in-the-throat');

Route::get('/snoring-treatment', function () {
    return view('services.snoring-treatment');
})->name('snoring-treatment');

Route::get('/throat-pain', function () {
    return view('services.throat-pain');
})->name('throat-pain');

Route::get('/difficulty-in-swallowing', function () {
    return view('services.difficulty-in-swallowing');
})->name('difficulty-in-swallowing');

Route::get('/change-in-voice', function () {
    return view('services.change-in-voice');
})->name('change-in-voice');

Route::get('/oral-ulcers', function () {
    return view('services.oral-ulcers');
})->name('oral-ulcers');

Route::get('/tonsillectomy', function () {
    return view('services.tonsillectomy');
})->name('tonsillectomy');

Route::get('/endoscopic-adenoidectomy', function () {
    return view('services.endoscopic-adenoidectomy');
})->name('endoscopic-adenoidectomy');

Route::get('/thyroidectomy', function () {
    return view('services.thyroidectomy');
})->name('thyroidectomy');

Route::get('/throat-surgery', function () {
    return view('services.throat-surgery');
})->name('throat-surgery');

// Head & Neck Services
Route::get('/thyroid-and-parotid-disorders', function () {
    return view('services.thyroid-and-parotid-disorders');
})->name('thyroid-and-parotid-disorders');

Route::get('/head-neck-cancer', function () {
    return view('services.head-neck-cancer');
})->name('head-neck-cancer');

Route::get('/laryngoscopy', function () {
    return view('services.laryngoscopy');
})->name('laryngoscopy');

// General ENT Care
Route::get('/ent-consultation', function () {
    return view('services.ent-consultation');
})->name('ent-consultation');

Route::get('/emergency-consultation', function () {
    return view('services.emergency-consultation');
})->name('emergency-consultation');

Route::get('/ent-surgery', function () {
    return view('services.ent-surgery');
})->name('ent-surgery');

// Urology Services
Route::get('/kidney-surgery', function () {
    return view('services.kidney-surgery');
})->name('kidney-surgery');

Route::get('/prostatectomy', function () {
    return view('services.prostatectomy');
})->name('prostatectomy');

Route::get('/bladder-surgery', function () {
    return view('services.bladder-surgery');
})->name('bladder-surgery');

Route::get('/ed-treatment', function () {
    return view('services.ed-treatment');
})->name('ed-treatment');

Route::get('/ed-sexual-dysfunction-treatment', function () {
    return view('services.ed-sexual-dysfunction-treatment');
})->name('ed-sexual-dysfunction-treatment');

Route::get('/hormonal-therapy', function () {
    return view('services.hormonal-therapy');
})->name('hormonal-therapy');

Route::get('/testosterone-replacement-therapy', function () {
    return view('services.testosterone-replacement-therapy');
})->name('testosterone-replacement-therapy');

Route::get('/peyronie-disease-treatment', function () {
    return view('services.peyronie-disease-treatment');
})->name('peyronie-disease-treatment');

Route::get('/vasectomy', function () {
    return view('services.vasectomy');
})->name('vasectomy');

Route::get('/male-infertility-assessment', function () {
    return view('services.male-infertility-assessment');
})->name('male-infertility-assessment');

Route::get('/lithotripsy', function () {
    return view('services.lithotripsy');
})->name('lithotripsy');

Route::get('/ureteroscopy', function () {
    return view('services.ureteroscopy');
})->name('ureteroscopy');

Route::get('/percutaneous-nephrolithotomy', function () {
    return view('services.percutaneous-nephrolithotomy');
})->name('percutaneous-nephrolithotomy');

Route::get('/kidney-stone-prevention-tips', function () {
    return view('services.kidney-stone-prevention-tips');
})->name('kidney-stone-prevention-tips');

Route::get('/urinary-tract-infection', function () {
    return view('services.urinary-tract-infection');
})->name('urinary-tract-infection');

Route::get('/bladder-dysfunction-treatment', function () {
    return view('services.bladder-dysfunction-treatment');
})->name('bladder-dysfunction-treatment');

Route::get('/overactive-bladder-solutions', function () {
    return view('services.overactive-bladder-solutions');
})->name('overactive-bladder-solutions');

Route::get('/cystoscopy-procedures', function () {
    return view('services.cystoscopy-procedures');
})->name('cystoscopy-procedures');

Route::get('/bph-treatment', function () {
    return view('services.bph-treatment');
})->name('bph-treatment');

Route::get('/prostate-cancer-diagnosis', function () {
    return view('services.prostate-cancer-diagnosis');
})->name('prostate-cancer-diagnosis');

Route::get('/post-surgery-rehabilitation', function () {
    return view('services.post-surgery-rehabilitation');
})->name('post-surgery-rehabilitation');

Route::get('/laparoscopic-surgeries', function () {
    return view('services.laparoscopic-surgeries');
})->name('laparoscopic-surgeries');

Route::get('/robotic-assisted-surgeries', function () {
    return view('services.robotic-assisted-surgeries');
})->name('robotic-assisted-surgeries');

Route::get('/benefits-of-minimally-invasive-procedures', function () {
    return view('services.benefits-of-minimally-invasive-procedures');
})->name('benefits-of-minimally-invasive-procedures');

Route::get('/congenital-urological-conditions', function () {
    return view('services.congenital-urological-conditions');
})->name('congenital-urological-conditions');

Route::get('/hypospadias', function () {
    return view('services.hypospadias');
})->name('hypospadias');

Route::get('/pediatric-kidney-stones', function () {
    return view('services.pediatric-kidney-stones');
})->name('pediatric-kidney-stones');

Route::get('/pediatric-urinary-tract-surgeries', function () {
    return view('services.pediatric-urinary-tract-surgeries');
})->name('pediatric-urinary-tract-surgeries');

Route::get('/kidney-health-checkup', function () {
    return view('services.kidney-health-checkup');
})->name('kidney-health-checkup');

Route::get('/prostate-health-screening', function () {
    return view('services.prostate-health-screening');
})->name('prostate-health-screening');

Route::get('/urology-lifestyle-advice', function () {
    return view('services.urology-lifestyle-advice');
})->name('urology-lifestyle-advice');

Route::get('/diagnostics-preventive-care', function () {
    return view('services.diagnostics-preventive-care');
})->name('diagnostics-preventive-care');
