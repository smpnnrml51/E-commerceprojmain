<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Product\Models\Product;
use Modules\Product\Repositories\CategoryRepository;
use Modules\Product\Repositories\ProductRepository;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data['title'] = 'Products List';
        $data['products'] = $this->productRepository->findAll();
        return view('product::product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Create Product';
        $data['categories'] = $this->categoryRepository->pluck();
        $data['status'] = Product::STATUS;
        // dd($data['categories']);
        return view('product::product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $inputData = $request->all();
        $this->productRepository->create($inputData);
        return redirect()->route('product.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $data['title'] = 'Show Product';
        $data['status'] = Product::STATUS;
        $data['product'] = $this->productRepository->getProductById($id);

        return view('product::product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['title'] = 'Edit Product';
        $data['status'] = Product::STATUS;
        $data['categories'] = $this->categoryRepository->pluck();
        $data['product'] = $this->productRepository->getProductById($id);

        return view('product::product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $inputData = $request->except(['_method', '_token']);
        $this->productRepository->update($id, $inputData);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ProductModel = $this->productRepository->getProductById($id);
        $ProductModel->delete();
        return response()->json(['status' => true, 'message' => 'Product Delete Succesfully']);
    }
}
