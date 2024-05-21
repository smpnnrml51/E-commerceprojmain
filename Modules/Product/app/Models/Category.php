<?php

namespace Modules\Product\Models;

use App\Traits\StatusTrait;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use StatusTrait;

    protected $table = 'tbl_categories';
    protected $primaryKey = 'categories_id';
    protected $guarded = [];
    protected $appends = ['status_name'];

}
