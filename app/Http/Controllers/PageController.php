<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hero;
use App\Models\Product;
use App\Models\Spesification;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {   
        $heroes = Hero::all();
        $products = Product::all();
        $products = Product::paginate(3);
        
        return view('front.index', compact('heroes', 'products')); 
    }
     public function details(Product $product)
    {   
        $spesifications = Spesification::all();
        return view('front.details', compact('product', 'spesifications'));
    }

     public function template()
    {
        return view('front.template');
    }

    public function about()
    {   
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function products()
    {   
        $products = Product::all();
        $products = Product::paginate(6);
        return view('front.products', compact('products'));
    }
}