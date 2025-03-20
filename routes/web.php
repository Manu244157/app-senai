<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [userController::class, 'index'])->name('user.index');
Route::get('/produtos-user', [userController::class, 'produtos'])->name('user.produtos');
Route::get('/mali-user', [userController::class, 'mali'])->name('user.mali');
Route::get('/inseticida-user', [userController::class, 'inseticida'])->name('user.inseticida');
Route::get('/carregador-user', [userController::class, 'carregador'])->name('user.carregador');
Route::get('/carrinhoMali-user', [userController::class, 'carrinhoMali'])->name('user.carrinhoMali');
Route::get('/carrinhoInse-user', [userController::class, 'carrinhoInse'])->name('user.carrinhoInse');
Route::get('/carrinhoCarre-user', [userController::class, 'carrinhoCarre'])->name('user.carrinhoCarre');
Route::get('/carrinhoVazio-user', [userController::class, 'carrinhoVazio'])->name('user.carrinhoVazio');
Route::get('/compra-user', [userController::class, 'compra'])->name('user.compra');
Route::get('/suporte-user', [userController::class, 'suporte'])->name('user.suporte');

Route::get('/edite-user/{user}', [userController::class, 'edite']) -> name('user.edite');
Route::put('/update-user/{user}', [userController::class, 'update']) -> name('user.update');
Route::get('/show-user/{user}', [userController::class, 'show']) -> name('user.show');
Route::get('/create-user', [userController::class, 'create'])->name('user.create');
Route::post('/store-user', [userController::class, 'store'])->name('user.store');
Route::get('/valter-user', [userController::class, 'valter'])->name('user.valter');
