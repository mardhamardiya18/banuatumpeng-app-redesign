<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Banner;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $products = Product::with(['category', 'gallery'])->limit(4)->get();
        $banners = Banner::get();

        return view('pages.katalog', [
            'categories' => $categories,
            'products' => $products,
            'banners' => $banners
        ]);
    }
}
