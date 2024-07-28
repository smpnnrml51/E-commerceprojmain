<?php

namespace Modules\Order\Repositories;

interface OrderInterface
{
    public function findAll();
    public function getOrderById($OrderId);
    public function delete($OrderId);
    public function create($OrderDetails);
    public function update($OrderId, array $newDetails);
    public function pluck();

}
