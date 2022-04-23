<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'gallery'])->get();
        $categories = Category::get();

        return view('pages.product', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function category($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where('categories_id', $category->id)->get();

        return view('pages.product', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function product($slug)
    {
        $product = Product::with(['category', 'gallery'])->where('slug', $slug)->firstOrFail();

        return view('pages.detail', [
            'product' => $product
        ]);
    }
}
