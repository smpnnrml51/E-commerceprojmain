<?php

namespace Modules\Product\Repositories;

use Modules\Product\Models\Category;

class CategoryRepository implements CategoryInterface
{
    public function findAll()
    {
        return Category::when(true, function ($query) {

        })->paginate(20);
    }

    public function getCategoryById($CategoryId)
    {
        return Category::findOrFail($CategoryId);
    }

    public function delete($CategoryId)
    {
        Category::destroy($CategoryId);
    }

    public function create($CategoryDetails)
    {
        return Category::create($CategoryDetails);
    }

    public function update($CategoryId, array $newDetails)
    {
        return Category::whereId($CategoryId)->update($newDetails);
    }

    public function pluck()
    {
        return Category::pluck('name', 'id');
    }

}
