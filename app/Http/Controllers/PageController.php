<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hero;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {   
        $heroes = Hero::all();
        $categories = Category::all() ;
        $products = Product::all();
        $products = Product::paginate(3);
        
        return view('front.index', compact('heroes', 'categories', 'products')); 
    }

    public function category(Category $category)
    {
        $product = $category->products->first(); 
        return view('front.category', compact('category', 'product'));
    }

     public function details(Product $product)
    {
        return view('front.details', compact('product'));
    }
}