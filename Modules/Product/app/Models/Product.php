<?php

namespace Modules\Product\Models;

use App\Traits\StatusTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use StatusTrait;
    protected $primaryKey = 'products_id';

    protected $table = 'tbl_products';
    protected $guarded = [];
    protected $appends = ['status_name'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
