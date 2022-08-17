<?php

use App\Models\Proof;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proof/{proof:slug}', function (Proof $proof) {
    return $proof->title;
})->name('proofs.show');
