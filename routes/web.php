<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
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



Route::post('/login', [AuthController::class, 'verifierlogin'])->name('login');

Route::get('/', function () {
    if (session("statu")) {
        return redirect(route('dash'));
    }
    return view('backend.login');
})->name("loginForm");
Route::group(['middleware' => 'verifierlogin'], function () {
    Route::get('/dashboard', [ProduitController::class, 'index'])->name('dash');
    Route::get('/delete/{ref}', [ProduitController::class, 'destroy'])->name('delete');
    Route::get('/details/{ref}', [ProduitController::class, 'detail'])->name('detail');
    Route::get('/ajouter', [ProduitController::class, 'create'])->name('ajouter');
    Route::post('/add', [ProduitController::class, 'store'])->name('add');
});
