<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;

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

// Language
Route::get('/language/{locale}', [HomeController::class, 'changeLanguage'])->name('change_language');
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/vision', [HomeController::class, 'vision'])->name('vision');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/support_us', [HomeController::class, 'supportUs'])->name('support_us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/sensibilization', [HomeController::class, 'sensibilization'])->name('sensibilization');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/hosp_map', [HomeController::class, 'hospMap'])->name('hosp_map');
