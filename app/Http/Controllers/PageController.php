<?php

namespace App\Http\Controllers;

// use App\Models\Category;

use App\Models\Company;
use App\Models\DocumentationProduct;
use App\Models\DocumentationWarehouse;
use App\Models\Hero;
use App\Models\Product;
use App\Models\Spesification;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {   
        $heroes = Hero::all();
        $companies = Company::all();
        $products = Product::all();
        return view('front.index', compact('heroes', 'products', 'companies')); 
    }
    public function details(Product $product)
{   
    $spesifications = $product->spesifications;
    $products = Product::all(); 

    return view('front.details', compact('product', 'products', 'spesifications'));
}


     public function template()
    {
        return view('front.template');
    }

    public function about()
    {   
        $product = DocumentationProduct::all();
        $warehouse = DocumentationWarehouse::all();
        return view('front.about', compact('product','warehouse'));
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function products()
    {   
        $products = Product::all();
        return view('front.products', compact('products'));
    }
}