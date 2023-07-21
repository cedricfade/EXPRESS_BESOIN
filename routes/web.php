<?php

use App\Http\Controllers\AjoutComposantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\SiteClimatiseurController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiteEquipementController;
use App\Http\Controllers\SiteLampeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\SiteClimatiseurList;
use App\Models\SiteEquipement;
use App\Models\User;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Lien des images créer
// Route::get('storage-link', function(){
//     $targetlink = storage_path('app/public');
//     $folder = $_SERVER['DOCUMENT_ROOT'] .'/storage';
//     symlink($targetlink,$folder);
// });



// Route::get('/',[UserController::class,'Inscription'])->name('inscription');
Route::get('/',[UserController::class,'Login'])->name('login');

// DECONNEXION
Route::get('/logout',[UserController::class,'logout'])->name('logout');
route::post('login.create',[UserController::class,'LoginAction'])->name('login.create');
Route::get('/dashboard',[DashboardController::class,'Dashboard'])->middleware('auth')->name('dashboard');
Route::get('/inscription',[UserController::class,'Inscription'])->name('inscription');
route::post('inscription.create',[UserController::class,'inscriptionAction'])->name('inscription.create');


// CLIMATISEUR ET SITE
Route::middleware(['auth'])->group(function () {

Route::get('/site/climatiseur/new',[SiteClimatiseurController::class,'SiteClimatiseurAjout'])->name('site.climatiseur.ajout');
Route::post('/site/climatiseur/traitement',[SiteClimatiseurController::class,'SiteClimatiseurTraitement'])->name('site.climatiseur.traitement');
Route::get('/site/climatiseur/view',[SiteClimatiseurController::class,'SiteClimatiseurView'])->name('site.climatiseur.view');
Route::get('/site/climatiseur',[SiteClimatiseurController::class,'siteclimatiseur'])->name('site.clim.list');

Route::get('/climatiseur/{id}',[SiteClimatiseurController::class,'Climatiseur'])->name('climatiseur.ajout');
Route::post('/climatiseur.action',[SiteClimatiseurController::class,'ClimatiseurAction'])->name('climatiseur.action');

Route::get('/climatiseur/infos/{id}/{libelle}',[SiteClimatiseurController::class,'ClimatiseurInfos'])->name('climatiseur.infos');

});


//LAMPE ET CLIMATISEUR


Route::middleware(['auth'])->group(function () {
 Route::get('/site/lampe/new',[SiteLampeController::class,'siteLampeAjout'])->name('site.lampe.ajout');
 Route::post('/site/lampe/traitement',[SiteLampeController::class,'Sitelampe'])->name('site.lampe.traitement');
 Route::get('/site/lampe/view',[SiteLampeController::class,'SiteLampeView'])->name('site.lampe.view');
 Route::get('/site/lampe/liste',[SiteLampeController::class,'siteLampeList'])->name('site.lampe.list');

 Route::get('/lampe/{id}',[SiteLampeController::class,'lampe'])->name('lampe.ajout');
 Route::post('/lampe.action',[SiteLampeController::class,'lampeAction'])->name('lampe.action');

 Route::get('/lampe/infos/{id}/{libelle}',[SiteLampeController::class,'lampeInfos'])->name('lampe.infos');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/site/equipement/new',[SiteEquipementController::class,'siteEquipementAjout'])->name('site.equipement.ajout');
    Route::post('/site/equipement/traitement',[SiteEquipementController::class,'SiteEquipement'])->name('site.equipement.traitement');
    Route::get('/site/equipement/view',[SiteEquipementController::class,'SiteEquipementView'])->name('site.equipement.view');

    Route::get('/equipement/{id}',[SiteEquipementController::class,'Equipement'])->name('equipement.ajout');
    Route::post('/equipement.action',[SiteEquipementController::class,'equipementAction'])->name('equipement.action');
   
    // Route::get('/equipement/ajout',[EquipementController::class,'equipementAjout'])->name('equipement.ajout');
    // Route::post('/equipement/traitement',[EquipementController::class,'equipement'])->name('equipement.ajout.traitement');
    // Route::get('/equipement',[EquipementController::class,'all'])->name('equipement.all');

});
