<?php

use App\Models\Proof;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/proofs', function () {
    if (request()->has('search')) {
        $proofs = Proof::search(request('search'));

        if (request()->has('category')) {
            $proofs = $proofs->get()->filter(fn ($proof) => $proof->category->value == request('category'));
        } else {
            $proofs = $proofs->get();
        }
    } else {
        if (request()->has('category')) {
            $proofs = Proof::where('category', request('category'))->get();
        } else {
            $proofs = Proof::all();
        }
    }

    return view('proofs.index', [
        'proofs' => $proofs,
        'title' => request()->has('search') ? "Search results for '" . request('search') . "'" : 'Proof Archive',
    ]);
})->name('proofs.index');

Route::get('/proofs/{proof:slug}', function (Proof $proof) {
    return view('proofs.show', ['proof' => $proof]);
})->name('proofs.show');
