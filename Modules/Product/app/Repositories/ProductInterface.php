<?php

namespace Modules\Product\Repositories;

interface ProductInterface
{
    public function findAll();
    public function getProductById($ProductId);
    public function delete($ProductId);
    public function create($ProductDetails);
    public function update($ProductId, array $newDetails);
    public function pluck();

}
