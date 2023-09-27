<?php

namespace App\Http\Controllers;

use Domain\Catalog\ViewModels\BrandViewModel;
use Domain\Catalog\ViewModels\CategoryViewModel;
use Domain\Product\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = CategoryViewModel::make()->homePage();

            $products = Product::query()
            ->homePage()
            ->get();
            // dd(auth()->user());

            return view('index', compact(
            'categories',
            'products',
         ));
    }
}
