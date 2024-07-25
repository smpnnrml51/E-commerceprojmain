<?php
namespace Modules\Cart\Repositories;

use Modules\Cart\Models\DeliveryAddress;

class DeliveryRepository implements DeliveryInterface
{
    public function findAll()
    {
        return DeliveryAddress::when(true, function ($query) {
        })->paginate(20);
    }
    public function getDeliveryById($DeliveryId)
    {
        return DeliveryAddress::findOrFail($DeliveryId);
    }
    public function delete($DeliveryId)
    {
        DeliveryAddress::destroy($DeliveryId);
    }
    public function create($DeliveryDetails)
    {
        return DeliveryAddress::create($DeliveryDetails);
    }
    public function update($DeliveryId, array $newDetails)
    {
        return DeliveryAddress::where('delivery_id', $DeliveryId)->update($newDetails);
    }
    public function pluck()
    {
        return DeliveryAddress::pluck('title', 'delivery_id');
    }
}