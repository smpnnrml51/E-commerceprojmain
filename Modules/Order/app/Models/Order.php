<?php

namespace Modules\Order\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $primaryKey = 'id';


    protected $table = 'tbl_orders';
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
