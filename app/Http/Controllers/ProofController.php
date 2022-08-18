<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $categories = collect(Category::cases())->map(function (Category $category) {
            if (request()->has('search')) {
                $proofs = Proof::search(request('search'))->get()->filter(fn ($proof) => $proof->category == $category);
            } else {
                $proofs = Proof::where('category', $category->value)->get();
            }

            return [$category, $proofs];
        })->filter(function ($categoryArray) {
            return $categoryArray[1]->count() > 0;
        });

        return view('proofs.index', [
            'title' => request()->has('search') ? "Search results for '" . request('search') . "'" : 'Proof Archive',
            'proofs' => $proofs,
            'categories' => $categories,
        ]);
    }

    public function show(Proof $proof): View
    {
        return view('proofs.show', [
            'proof' => $proof,
        ]);
    }
}
