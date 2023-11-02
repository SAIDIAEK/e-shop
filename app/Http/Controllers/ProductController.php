<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(8);

        return inertia('Shop', [
            'products'=> $products,
        ]);
    }

    public function show(string $slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        $productsAlsoLike = Product::where('id','!=', $product->id)->inRandomOrder()->take(4)->get();

        return inertia('Product', [
            'product' => $product,
            'productsAlsoLike' => $productsAlsoLike,
        ]);
    }
}
