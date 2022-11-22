<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Web\HomeController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [AccueilController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::post('/add.slide', [AboutController::class, 'addSlide'])->name('add.slide');
    Route::post('/addRubrique', [AboutController::class, 'addRubrique'])->name('addRubrique');
    Route::post('/Updatslide', [AboutController::class, 'Updatslide'])->name('Updatslide');
});

// Language
Route::get('/language/{locale}', [HomeController::class, 'changeLanguage'])->name('change_language');
// Route::group([
//     'prefix' => LaravelLocalization::setLocale(),
//     'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
// ], function () {
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/vision', [HomeController::class, 'vision'])->name('vision');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/support_us', [HomeController::class, 'supportUs'])->name('support_us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/{id}', [HomeController::class, 'newsDetails'])->whereNumber('id')->name('news_details');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/sensibilization', [HomeController::class, 'sensibilization'])->name('sensibilization');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/hosp_map', [HomeController::class, 'hospMap'])->name('hosp_map');
// });
