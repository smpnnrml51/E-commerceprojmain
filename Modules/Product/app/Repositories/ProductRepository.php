<?php

namespace Modules\Product\Repositories;

use Modules\Product\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements ProductInterface
{
    public function findAll()
    {
        return Product::when(true, function ($query) {
        })->paginate(20);
    }

    public function getProductById($ProductId)
    {
        return Product::findOrFail($ProductId);
    }

    public function delete($ProductId)
    {
        Product::destroy($ProductId);
    }

    public function create($ProductDetails)
    {

        // Ensure 'qty' always has a value
        if (!isset($ProductDetails['qty'])) {
            $ProductDetails['qty'] = 0;
        }

        // Ensure 'stock' always has a value
        if (!isset($ProductDetails['stock'])) {
            $ProductDetails['stock'] = 0;
        }
        if (isset($ProductDetails['file'])) {
            $file = $ProductDetails['file'];
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = 'uploads/' . $filename;
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            // Store the file path in the product details
            $ProductDetails['filepond'] = $filePath;
        }
    
        return Product::create($ProductDetails);
    }

    public function update($ProductId, array $newDetails)
    {
        return Product::whereId($ProductId)->update($newDetails);
    }

    public function pluck()
    {
        return Product::pluck('name', 'id');
    }
}
