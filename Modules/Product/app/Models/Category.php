<?php

namespace Modules\Product\Models;

use App\Traits\StatusTrait;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use StatusTrait;

    protected $table = 'tbl_categories';
    protected $guarded = [];
    protected $appends = ['status_name'];

}
