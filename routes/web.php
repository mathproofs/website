<?php

use App\Models\Proof;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proofs/{proof:slug}', function (Proof $proof) {
    return view('proofs.show', ['proof' => $proof]);
})->name('proofs.show');
