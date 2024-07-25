<?php
namespace Modules\Cart\Repositories;

interface DeliveryInterface
{
    public function findAll();
    public function getDeliveryById($DeliveryId);
    public function delete($DeliveryId);
    public function create($DeliveryDetails);
    public function update($DeliveryId, array $newDetails);
    public function pluck();
}