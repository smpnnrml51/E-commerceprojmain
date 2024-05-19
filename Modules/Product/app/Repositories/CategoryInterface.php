<?php

namespace Modules\Product\Repositories;

interface CategoryInterface
{
    public function findAll();
    public function getCategoryById($CategoryId);
    public function delete($CategoryId);
    public function create($CategoryDetails);
    public function update($CategoryId, array $newDetails);
    public function pluck();

}
