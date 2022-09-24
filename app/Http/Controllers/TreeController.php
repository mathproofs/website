<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Proof;
use Illuminate\Contracts\View\View;

class TreeController
{
    public function __invoke(): View
    {
        seo()->title('Tree of proofs - ' . config('app.name'));

        $proofs = Proof::with('implications')->get();

        $categories = Category::cases();

        return view('tree', [
            'proofs' => $proofs,
            'categories' => $categories,
        ]);
    }
}
