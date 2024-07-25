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
        $productId = $product->id;
        $found = false;

        foreach($cart as $item){
            if($item['id'] == $productId){
                dd($item);
                $item['quantity']++;
                $found = true;
                break;
            }
        }
        
        if(!$found){
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


    public function getCart()
    {
        return session('cart',[]);
    }
}
