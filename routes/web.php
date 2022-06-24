<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcouteurController;
use App\Http\Controllers\PortableController;
use App\Http\Controllers\OrdinateurController;
use App\Http\Controllers\TeleviseurController;

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

/** Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [HomeController::class, 'home'])->name('home');
//Route::get('/home', [HomeController::class, 'index'])->name('index');
//Panier
Route::resource('cart', CartController::class);

Route::get('/{slug}', [HomeController::class,'show'])->name('show');

Route::get('/portables', [PortableController::class, 'portables'])->name('portables');
Route::get('/ordinateurs', [OrdinateurController::class, 'ordinateurs'])->name('ordinateurs');
Route::get('/ecouteurs', [EcouteurController::class, 'ecouteurs'])->name('ecouteurs');
Route::get('/televiseurs', [TeleviseurController::class, 'televiseurs'])->name('televiseurs');


Route::get('/passer-a-la-caisse', [CommandeController::class, 'caisse'])->name('passer-a-la-caisse');



Route::post('/deletecart', [CartController::class, 'deletecart'])->name('deletecart');
