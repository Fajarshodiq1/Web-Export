<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductClick;
use App\Models\Product;

class ProductClickController extends Controller
{
    public function trackClick(Request $request)
    {
        $product = Product::where('slug', $request->product)->firstOrFail();

        $productClick = ProductClick::firstOrCreate(
            ['product_id' => $product->id],
            ['click_count' => 0]
        );
        
        $productClick->increment('click_count');

        return response()->json([
            'message' => 'Click recorded',
            'product_name' => $product->name, 
            'total_clicks' => $productClick->click_count
        ]);
    }
}