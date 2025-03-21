<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AchatsController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DetailsCommandeController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\ModeReglementController;
use App\Http\Controllers\EtatController;
use App\Http\Middleware\AdminMiddleware;



#Route::get('/login',fn () => view('login'));
#Route::get('/register',fn () => view('register'));
Route::get('/cart',fn () => view('admin.store/cart'));

Route::resource('users',UserController::class);
Route::resource('produits',ProduitController::class);
Route::resource('commandes',CommandeController::class);
Route::resource('details-commandes',DetailsCommandeController::class);
Route::resource('familles',FamilleController::class);
Route::resource('sous-familles',SousFamilleController::class);
Route::resource('marques',MarqueController::class);
Route::resource('unites',UniteController::class);
Route::resource('mode-reglements',ModeReglementController::class);
Route::resource('etats',EtatController::class);
Route::resource('fournisseurs',FournisseurController::class);
Route::resource('achats',AchatsController::class);

Route::get('/users/{user}/toggle-admin',[UserController::class,'toggleAdmin'])->name('users.toggleAdmin');





#Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/',fn () => view('client.Layout.app'));
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(AdminMiddleware::class)->group(function(){
    Route::get('/admin',fn () => view('admin.Layout.app'));
});


require __DIR__.'/auth.php';
