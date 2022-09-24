<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProofController;
use App\Http\Controllers\TreeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/tree', TreeController::class)->name('tree');
Route::get('/proofs/archive', [ProofController::class, 'index'])->name('proofs.index');
Route::get('/proofs/{proof:slug}', [ProofController::class, 'show'])->name('proofs.show');
Route::view('/social', 'social');
