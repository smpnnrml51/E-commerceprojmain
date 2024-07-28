<?php

namespace Modules\Cart\Services;

class CartService
{
    public function __construct()
    {
        if (!session()->has('cart')) {
            session(['cart' => []]);
        }
    }

    public function addToCart($product)
    {
        $cart = session('cart');
        $productId = $product->products_id;
        $found = false;

        foreach($cart as $key=>$item){
            if($item['id'] == $productId){
                $cart[$key]['quantity'] += 1;
                // dd($item);
                // $cartshow = collect(session('cart'))->firstWhere('id', $key);
                // dd($cartshow);
                // dd(session('cart'));
                $found = true;
                break;
            }
        }
        
        if($found!=true){
            // dd($item);
          $cart[] = [
            'id' => $product->products_id,
            'name' => $product->name,
            'category' => $product->Category->title,
            'description' => $product->desc,
            'price' => $product->price,
            'image' => $product->filepond,
            'quantity' => 1
            
            ];  
        }
        session(['cart' => $cart]);
    }

    public function removeFromCart($product)
    {
        $cart = session('cart');
        $productId = $product->products_id;
        $found = false;
        foreach($cart as $key=>$item){
            if ($item['id'] == $productId) {
                $cart[$key]['quantity'] -= 1;
                if ($cart[$key]['quantity'] <= 0) {
                    unset($cart[$key]);
                }
                session(['cart' => $cart]);
                break;
            }
        }
        session(['cart' => array_values($cart)]);

    }


    public function getCart()
    {
        return session('cart',[]);
    }
}
