<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\CelularController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [SiteController::class, 'index'])->name('SiteController.entrar');
Route::post('/', [SiteController::class, 'login'])->name('SiteController.login');

Route::get('/criarConta-Cliente', [UserController::class, 'criarContaCliente'])->name('UserController.criarContaCliente');
Route::post('/criarConta-Cliente', [UserController::class, 'store'])->name('UserController.store');


Route::get('/criarConta-Loja', [LojaController::class, 'criarContaLoja'])->name('LojaController.criarContaLoja');
Route::post('/criarConta-Loja', [LojaController::class, 'store'])->name('LojaController.store');

Route::get('/Lojas/{slug}', [LojaController::class, 'index'])->name('LojaController.index');
Route::get('/MinhaLoja/{slug}', [LojaController::class, 'dadosLoja'])->name('LojaController.dadosLoja');
Route::get('/MinhaConta/{slug}', [UserController::class, 'dadosUser'])->name('UserController.dadosUser');
Route::get('/MinhaConta/Gerir-Celulares/{slug}', [CelularController::class, 'celularesMinhaLoja'])->name('CelularController.celularesMinhaLoja');
Route::post('/MinhaConta/Gerir-Celulares/{slug}', [CelularController::class, 'store'])->name('CelularController.store');
Route::get('/Celulares/{opcao}/{slug}', [CelularController::class, 'index'])->name('CelularController.index');