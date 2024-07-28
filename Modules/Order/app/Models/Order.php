<?php

namespace Modules\Order\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $primaryKey = 'id';


    protected $table = 'tbl_orders';
    protected $guarded = [];

}
