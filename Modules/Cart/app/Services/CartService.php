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
        $cart[] = $product;
        session(['cart' => $cart]);
    }

    public function getCart()
    {
        return session('cart');
    }
}
