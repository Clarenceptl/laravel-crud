<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\EmailController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PanierController;

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
   return view('accueil');
})->middleware(['auth'])->name('accueil');
Route::get('/films',[FilmController::class, 'home'])
   ->middleware(['auth'])->name('films');

Route::post('/films',[FilmController::class, 'store'])
   ->middleware(['auth'])->name('films_store');

Route::GET('/search',[FilmController::class, 'search'])
   ->middleware(['auth'])->name('search_movie');

Route::get('/latest',[FilmController::class, 'latest'])
   ->middleware(['auth'])->name('latest');

Route::get('/short-movie',[FilmController::class, 'short_movie'])
   ->middleware(['auth'])->name('short-movie');

Route::get('/delete/{id_film}',[FilmController::class, 'delete_movie'])
   ->middleware(['auth'])->name('delete-movie');

Route::get('/create_movie',[FilmController::class, 'create_movie'])
   ->middleware(['auth'])->name('create-movie');

Route::get('/film/{id_film}/{id}',[FilmController::class, 'rate_movie'])
   ->middleware(['auth'])->name('rate-movie');

Route::get('/films/{id_film}/reservation',[FilmController::class, 'reservation']);

Route::get('panier', [PanierController::class, 'show'])
->middleware(['auth'])->name('panier.show');
Route::post('panier/add/{product}', [PanierController::class, 'add'])
->middleware(['auth'])->name('panier.add');
Route::get('panier/remove/{product}', [PanierController::class, 'remove'])
->middleware(['auth'])->name('panier.remove');
Route::get('panier/empty', [PanierController::class, 'empty'])
->middleware(['auth'])->name('panier.empty');
Route::get('panier/paiement', [PanierController::class, 'showPaiement'])
->middleware(['auth'])->name('panier.paiement');

Route::post('panier/paiement', [PanierController::class, 'paiement'])
->middleware(['auth'])->name('paiement');

Route::get('/film/{id_film}',[FilmController::class, 'reservation'])
->middleware(['auth'])->name('films_reservation');

Route::get('/getfreetoken',[FilmController::class, 'showFreeToken'])
->middleware(['auth'])->name('freetoken');

Route::post('/getfreetoken',[FilmController::class, 'postFreeToken'])
->middleware(['auth'])->name('postfreetoken');



//Commentaire
Route::get('/testCom',[CommentaireController::class, 'show'])
  ->middleware(['auth'])->name('com');

//Contact
Route::get('/testmail', [EmailController::class,'testMail'])->middleware(['auth'])->name('email.test');
require __DIR__.'/auth.php';
