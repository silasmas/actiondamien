<?php




use App\Models\actualite;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AirController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RubriqueController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SoutenirController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\ZoneController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;

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
    Route::post('/addstat', [AboutController::class, 'addstat'])->name('addstat');
    Route::post('/addstat2', [AboutController::class, 'addstat2'])->name('addstat2');
    Route::post('/addbon', [AboutController::class, 'addbon'])->name('addbon');
    Route::post('/add.hopital', [AboutController::class, 'addhtopial'])->name('add.hopital');
    Route::post('/add.support', [AboutController::class, 'addsupport'])->name('add.support');

    Route::post('/add.news', [ActualiteController::class, 'store'])->name('add.news');
    Route::post('/addcentre', [CentreController::class, 'store'])->name('addcentre');
    Route::post('/addAir', [AirController::class, 'store'])->name('addAir');
    Route::post('/addzone', [ZoneController::class, 'store'])->name('addzone');
    Route::post('/projets', [ProjetController::class, 'store'])->name('projets');
    Route::post('/addbon', [AboutController::class, 'addbon'])->name('addbon');
    Route::post('/add.hopital', [AboutController::class, 'addhtopial'])->name('add.hopital');
    Route::post('/add.support', [AboutController::class, 'addsupport'])->name('add.support');


    // Route::post('/add.news', [ActualiteController::class, 'store'])->name('add.news');
    // Route::post('/addcentre', [CentreController::class, 'store'])->name('addcentre');
    // Route::post('/addAir', [AirController::class, 'store'])->name('addAir');
    // Route::post('/addzone', [ZoneController::class, 'store'])->name('addzone');
    Route::post('/addVideo', [TemoignageController::class, 'store'])->name('addVideo');
    Route::post('/addSensibilisation', [TemoignageController::class, 'addSensibilisation'])->name('addSensibilisation');
    // Route::post('/projets', [ProjetController::class, 'store'])->name('projets');

    Route::post('/editeImageNews', [ProjetController::class, 'editeImageNews'])->name('editeImageNews');
    Route::post('/editeNews', [ProjetController::class, 'editeNews'])->name('editeNews');

    Route::post('/editeSlide', [SlideController::class, 'editeSlide'])->name('editeSlide');
    Route::post('/editeImageSlide', [SlideController::class, 'editeImageSlide'])->name('editeImageSlide');

    Route::post('/editbon', [AboutController::class, 'editbon'])->name('editbon');
    Route::post('/editMaladie', [AboutController::class, 'editMaladie'])->name('editMaladie');
    Route::post('/editStat', [AboutController::class, 'editStat'])->name('editStat');
    Route::post('/edithopital', [AboutController::class, 'edithopital'])->name('edithopital');
    Route::post('/editeImageHopital', [AboutController::class, 'editeImageHopital'])->name('editeImageHopital');
    Route::post('/editeImageSupport', [SoutenirController::class, 'editeImageSupport'])->name('editeImageSupport');
    Route::post('/editSupport', [SoutenirController::class, 'editSupport'])->name('editSupport');
    Route::post('/editeImageSens', [TemoignageController::class, 'editeImageSens'])->name('editeImageSens');
    Route::post('/editTem', [TemoignageController::class, 'editTem'])->name('editTem');
    Route::post('/editVideo', [TemoignageController::class, 'editVideo'])->name('editVideo');

    Route::post('/editprojet', [ProjetController::class, 'editprojet'])->name('editprojet');
    Route::post('/editeImageProjet', [ProjetController::class, 'editeImageProjet'])->name('editeImageProjet');
    Route::post('/editZone', [ZoneController::class, 'editZone'])->name('editZone');
    Route::post('/editAir', [AirController::class, 'editAir'])->name('editAir');
    Route::post('/editVideo', [TemoignageController::class, 'editVideo'])->name('editVideo');

    Route::get('/addinfo', [ProjetController::class, 'index'])->name('addinfo');
    Route::get('/newsletter', [ProjetController::class, 'newsletter'])->name('newsletter');
    Route::get('/G_home', [RubriqueController::class, 'index'])->name('G_home');
    Route::get('/G_news', [RubriqueController::class, 'news'])->name('G_news');
    Route::get('/G_temoignage', [RubriqueController::class, 'temoignages'])->name('G_temoignage');
    Route::get('/G_carthographie', [RubriqueController::class, 'carthographie'])->name('G_carthographie');
    Route::get('/G_projet', [ProjetController::class, 'gprojet'])->name('G_projet');

    Route::get('delSlide/{id}', [RubriqueController::class, 'destroy'])->name('delSlide');
    Route::get('delAbout/{id}', [AboutController::class, 'destroy'])->name('delAbout');
    Route::get('delState/{id}', [AboutController::class, 'delState'])->name('delState');
    Route::get('delMaladie/{id}', [AboutController::class, 'delMaladie'])->name('delMaladie');
    Route::get('delHopital/{id}', [AboutController::class, 'delHopital'])->name('delHopital');
    Route::get('delSupport/{id}', [SoutenirController::class, 'delSupport'])->name('delSupport');
    Route::get('delNews/{id}', [ActualiteController::class, 'destroy'])->name('delNews');
    Route::get('delSens/{id}', [TemoignageController::class, 'destroy'])->name('delSens');

    Route::get('delzone/{id}', [ZoneController::class, 'destroy'])->name('delzone');
    Route::get('delAir/{id}', [AirController::class, 'destroy'])->name('delAir');
    Route::get('delCentre/{id}', [CentreController::class, 'destroy'])->name('delCentre');
    Route::get('delProjet/{id}', [ProjetController::class, 'destroy'])->name('delProjet');
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
Route::get('/sensibilization/{id}', [HomeController::class, 'sensibilization'])->whereNumber('id')->name('sensibilization_details');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/projects_details/{id}', [HomeController::class, 'project'])->whereNumber('id')->name('projects_details');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/hosp_map', [HomeController::class, 'hospMap'])->name('hosp_map');
// });
