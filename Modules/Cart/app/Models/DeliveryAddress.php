<?php

namespace Modules\Cart\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cart\Database\Factories\DeliveryAddressFactory;
use App\Traits\StatusTrait;

class delivery_address extends Model
{
    use StatusTrait;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'delivery_addresses';
    protected $primaryKey = 'delivery_address_id';
    protected $guarded = [];
    protected $appends = ['status_name'];
}
