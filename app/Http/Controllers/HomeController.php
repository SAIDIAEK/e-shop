<?php

namespace App\Http\Controllers;

use App\Models\Product;
/* use Illuminate\Http\Request; */

class HomeController extends Controller
{
    public function index(){
        $products = Product::inRandomOrder()->take(8)->get();

        return inertia('Home', [
            'products'=> $products,
        ]);
    }
}
