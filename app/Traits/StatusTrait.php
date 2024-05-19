<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait StatusTrait
{
    const STATUS = [
        11 => 'Active',
        10 => 'In-Active',
    ];

    protected function statusName(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                // dd($value, $attributes);
                switch ($attributes['status']) {
                    case '10':
                        return '<span class="badge bg-danger">' . self::STATUS[$attributes['status']] . '</span>';
                        break;
                    case '11':
                        return '<span class="badge bg-success">' . self::STATUS[$attributes['status']] . '</span>';
                        break;
                    default:
                        # code...
                        break;
                }
            },
            set: fn($value) => $value,
        );
    }
}
