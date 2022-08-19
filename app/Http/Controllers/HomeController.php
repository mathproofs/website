<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Proof;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        seo()
            ->title(config('app.name') . ' - Mathematical proofs, easily explained')
            ->description('On this website you can find mathematical proofs for many theorems. These proofs are easy to read and understand.');

        return view('home', [
            'categories' => collect(Category::cases())->map(
                fn (Category $category) => [$category,  $category->proofs()]
            ),
            'featured' => Proof::inRandomOrder()->first(),
        ]);
    }
}
