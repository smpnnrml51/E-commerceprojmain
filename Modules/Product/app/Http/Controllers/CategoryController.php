<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Product\Models\Category;
use Modules\Product\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    private $categoryRepository;
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data['title'] = 'Categories List';
        $data['categories'] = $this->categoryRepository->findAll();
        return view('product::category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Create Category';
        $data['status'] = Category::STATUS;

        return view('product::category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $inputData = $request->all();
        $this->categoryRepository->create($inputData);
        return redirect()->route('category.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $data['title'] = 'Show Category';
        $data['status'] = Category::STATUS;
        $data['categories'] = $this->categoryRepository->getCategoryById($id);

        return view('product::category.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['title'] = 'Edit Category';
        $data['status'] = Category::STATUS;

        $data['category'] = $this->categoryRepository->getCategoryById($id);

        return view('product::category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $inputData = $request->except(['_method', '_token']);
        $this->categoryRepository->update($id, $inputData);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $CategoryModel = $this->categoryRepository->getCategoryById($id);
        $CategoryModel->delete();
        return response()->json(['status' => true, 'message' => 'Category Delete Succesfully']);
    }
}
