<?php

namespace Modules\Order\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Product\Models\Category;
use Illuminate\Support\Facades\Auth;
use Modules\Order\Models\Order;
use Modules\Product\Repositories\CategoryRepository;
use Modules\Product\Repositories\ProductRepository;
use Modules\Order\Repositories\OrderRepository;

use Modules\Product\Models\Product;

class OrderController extends Controller
{
    private $productRepository;
    private $orderRepository;
    private $categoryRepository;
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        OrderRepository $orderRepository

    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->orderRepository = $orderRepository;

    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('order::index');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order::show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate request data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'delivery_address' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $cart = session('cart', []);
        
        $userId = Auth::id();
        // $userId = 2;


        $uniqueCode = $this->generateUniqueTitle();

        // Prepare order data
        $orderData = array_merge($validatedData, [
            'products' => json_encode($cart), // Store cart items as JSON
            'customer_id' => $userId, // Set customer_id to the ID of the currently authenticated user
            'status' => 'pending', // Set default order status
            'title' => $uniqueCode,
        ]);

        // Save the order
        $order = $this->orderRepository->create($orderData);

        session(['order_data' => $order]);
        // Redirect to Stripe payment page
        return redirect()->route('order.show', ['order' => $order->id]);
    }
    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $order = $this->orderRepository->getOrderById($id);
        return view('order::stripe', ['order' => $order]);
    }

    public function updateStatus(Request $request, $id)
    {
        $inputData = $request->except(['_method', '_token']);
        $this->orderRepository->update($id, $inputData);
        return redirect()->route('order.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('order::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $this->orderRepository->delete($id);
        return redirect()->route('home.index');
    }
    // public function payment()
    // {
    //     return view('order::payment');
    // }
        public function orders()
    {
        $orders = $this->orderRepository->findAll();
        return view('order::index', compact('orders'));
    }
    protected function generateUniqueTitle()
    {
        do {
            $uniqueCode = '#' . strtoupper(Str::random(6));
        } while (Order::where('title', $uniqueCode)->exists());

        return $uniqueCode;
    }
    public function orderDetails($id)
    {
        $order = $this->orderRepository->getOrderById($id);
        return view('order::order-details', compact('order'));
    }
    public function orderTrack($id)
    {
        // $order = Order::find($id);
        // $products = Product::all();
        $order = $this->orderRepository->getOrderById($id);
        return view('order::order-track', compact('order'));
    }
}
