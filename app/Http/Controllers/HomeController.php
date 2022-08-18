<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('home', [
            'categories' => collect(Category::cases())->map(
                fn (Category $category) => [$category,  $category->proofs()]
            ),
        ]);
    }
}
