<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class Products extends Component
{
    public $products;

    public function __construct($products = null)
    {
        $this->products = $products ?? Product::all(); // Ambil semua produk jika tidak ada yang dikirim
    }

    public function render()
    {
        return view('components.products');
    }
}