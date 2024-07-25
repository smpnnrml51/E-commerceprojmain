<?php

namespace Modules\UserSite\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\Category;
use Modules\Product\Repositories\CategoryRepository;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Models\Product;


class UserSiteController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data['title'] = 'Products List';
        $data['products'] = $this->productRepository->findAll();
        return view('usersite::home.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('usersite::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        // $data['title'] = 'Show Category';
        // $data['status'] = Category::STATUS;
        // $data['categories'] = $this->categoryRepository->getCategoryById($id);
        $data['product'] = $this->productRepository->getProductById($id);
        return view('usersite::home.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('usersite::edit');
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
    public function search(Request $request)
    {
        $data['title'] = 'Products List';
        $data['products'] = $this->productRepository->search($request->search);
        return view('usersite::home.index', $data);
    }
    public function products()
    {
        $data['products'] = $this->productRepository->findAll();
        return view('usersite::home.products', $data);
    }
    public function wishlist()
    {
        return view('usersite::home.wishlist');
    }
    // public function checkout()
    // {
    //     return view('usersite::home.checkout');
    // }
    public function profile()
    {
        return view('usersite::home.profile');
    }
}
