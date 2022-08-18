<?php

namespace App\Http\Controllers;

use App\Models\Proof;
use Illuminate\Contracts\View\View;

class ProofController extends Controller
{
    public function index(): View
    {
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
    }

    public function show(Proof $proof): View
    {
        return view('proofs.show', [
            'proof' => $proof,
        ]);
    }
}
