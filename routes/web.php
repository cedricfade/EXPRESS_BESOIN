<?php

use App\Http\Controllers\AjoutComposantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteClimatiseurController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\SiteClimatiseurList;
use App\Models\User;
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

// Route::get('/',[UserController::class,'Inscription'])->name('inscription');
Route::get('/',[UserController::class,'Login'])->name('login');

// DECONNEXION
Route::get('/logout',[UserController::class,'logout'])->name('logout');
route::post('login.create',[UserController::class,'LoginAction'])->name('login.create');
Route::get('/dashboard',[DashboardController::class,'Dashboard'])->middleware('auth')->name('dashboard');
Route::get('/inscription',[UserController::class,'Inscription'])->name('inscription');
route::post('inscription.create',[UserController::class,'inscriptionAction'])->name('inscription.create');



// Route::get('/equipement',[AjoutComposantController::class,'equipement'])->name('equipement');
// Route::get('/climatiseur/{id}',[AjoutComposantController::class,'Climatiseur'])->name('climatiseur.ajout');




// // SITE
// Route::get('/site',[SiteController::class,'siteListe'])->name('site.liste');
// Route::get('/site/view',[SiteController::class,'siteView'])->name('site.view');
// // SITE climatiseur
// Route::get('/site/ajout',[SiteController::class,'Ajoutsite'])->name('site.ajout');
// Route::post('/traitement.site',[SiteController::class,'AjoutsiteAction'])->name('site.ajout.action');


// CLIMATISEUR ET SITE

Route::get('/site/climatiseur/new',[SiteClimatiseurController::class,'SiteClimatiseurAjout'])->name('site.climatiseur.ajout');
Route::post('/site/climatiseur/traitement',[SiteClimatiseurController::class,'SiteClimatiseurTraitement'])->name('site.climatiseur.traitement');
Route::get('/site/climatiseur/view',[SiteClimatiseurController::class,'SiteClimatiseurView'])->name('site.climatiseur.view');
Route::get('/site/climatiseur',[SiteClimatiseurController::class,'siteclimatiseur'])->name('site.clim.list');

Route::get('/climatiseur/{id}',[SiteClimatiseurController::class,'Climatiseur'])->name('climatiseur.ajout');
Route::post('/climatiseur.action',[SiteClimatiseurController::class,'ClimatiseurAction'])->name('climatiseur.action');

Route::get('/climatiseur/infos/{id}/{libelle}',[SiteClimatiseurController::class,'ClimatiseurInfos'])->name('climatiseur.infos');




//LAMPE ET CLIMATISEUR

