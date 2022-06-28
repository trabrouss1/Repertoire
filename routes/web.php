<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactController;
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

// La route d'entree
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(static function() {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::match(['get', 'post'],'/ajouter-contact', [ContactController::class, "ajouterContact"])->name('ajouterContact');
});


Route::middleware(['auth', 'admin'])->group(static function (){
    Route::prefix('admin')->group(static function (){
        Route::get('/accueil-admin', function () { return view('base'); })->name('admin');
        Route::match(['get', 'post'],'/list-user', [AdminController::class, "listUser"])->name('listUser');
        Route::match(['get', 'post'],'/add-user', [AdminController::class, "addUser"])->name('addUser');
        Route::match(['get', 'post'],'/edit-user/{user}', [AdminController::class, "editUser"])->name('editUser');
        // Route::match(['get', 'post'],'/delete-user/{user}', [AdminController::class, "deleteUser"])->name('deleteUser');
    });
});
require __DIR__.'/auth.php';