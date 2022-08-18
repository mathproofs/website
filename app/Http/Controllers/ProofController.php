<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Proof;
use Illuminate\Contracts\View\View;

class ProofController extends Controller
{
    public function index(): View
    {
        // Find proofs
        if (request()->has('search')) {
            $proofs = request()->has('category')
                ? Proof::search(request('search'))->get()->filter(fn ($proof) => $proof->category->value == request('category'))
                : Proof::search(request('search'))->get();
        } else {
            $proofs = request()->has('category')
                ? Proof::where('category', request('category'))->get()
                : Proof::all();
        }

        // Find categories
        $categories = collect(Category::cases())->map(function (Category $category) {
            $proofs = request()->has('search')
                ? $proofs = Proof::search(request('search'))->get()->filter(fn ($proof) => $proof->category == $category)
                : $proofs = Proof::where('category', $category->value)->get();

            return [$category, $proofs];
        })->filter(fn ($categoryArray) => $categoryArray[1]->count() > 0);

        // Return response
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
