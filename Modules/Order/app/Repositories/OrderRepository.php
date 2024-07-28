<?php

namespace Modules\Order\Repositories;

use Modules\Order\Models\Order;

class OrderRepository implements OrderInterface
{
    public function findAll()
    {
        return Order::when(true, function ($query) {

        })->paginate(20);
    }

    public function getOrderById($OrderId)
    {
        return Order::findOrFail($OrderId);
    }

    public function delete($OrderId)
    {
        Order::destroy($OrderId);
    }

    public function create($OrderDetails)
    {
        return Order::create($OrderDetails);
    }

    public function update($OrderId, array $newDetails)
    {
        return Order::where('id', $OrderId)->update($newDetails);
    }

    public function pluck()
    {
        return Order::pluck('title', 'id');
    }

}
