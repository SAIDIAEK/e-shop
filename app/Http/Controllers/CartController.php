<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productsAlsoLike = Product::inRandomOrder()->take(4)->get();

        $cart = Cart::content();

        return inertia('Cart/index', [
            'productsAlsoLike' => $productsAlsoLike,
            'cart' => $cart,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cart::add([
            'id' => $request->id, 
            'name' => $request->name, 
            'qty' => 1, 
            'price' => $request->price, 
            'options' => [
                'slug' => $request->slug,
                'details' => $request->details
            ],
        ]);//->associate('App\Models\Product')
        //dd($request->slug,$request->details);

        return to_route('cart.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, string $id)
    {
        
    } */
    public function update(Request $request, $rowId)
    {
        
        $qty = $request->input('qty'); // Nouvelle quantité
        
        Cart::update($rowId, $qty);
    
        //return to_route('cart.index'); //redirect()->back(); Redirigez l'utilisateur vers la page du panier
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function empty()
    {
        Cart::destroy();
    }
}
