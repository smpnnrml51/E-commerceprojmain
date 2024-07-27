<?php

namespace Modules\Cart\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Cart\Services\CartService;
use Illuminate\Http\RedirectResponse;
use Modules\Product\Repositories\ProductInterface;
use Modules\Product\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $cartService;
    private $productRepository;


    public function __construct(CartService $cartService,
    ProductRepository $productRepository)
    {
        $this->cartService = $cartService;
        $this->productRepository = $productRepository;
        
    }

    public function index()
    {
        return view('cart::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cart::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('cart::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $product = $this->productRepository->getProductById($productId);
        if($product){
            $this->cartService->addToCart($product);
            return redirect()->back()->with('success', 'Product added to cart');
        }else{
            return redirect()->back()->with('error', 'Product not found');
        }

    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        $product = $this->productRepository->getProductById($productId);
        if($product){
            $this->cartService->removeFromCart($product);
            return redirect()->back()->with('success', 'Product removed from cart');
        }else{
            return redirect()->back()->with('error', 'Product not found');
        }
        
    }

    public function show()
    {
        $cart = $this->cartService->getCart();
        return view('cart', compact('cart'));
    }
    public function checkout()
    {
        // $cart = $this->cartService->getCart();
        return view('cart::checkout');
    }
}
