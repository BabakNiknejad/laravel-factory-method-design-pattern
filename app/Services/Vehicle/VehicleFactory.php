<?php

namespace App\Services\Vehicle;

use App\Services\Vehicle\Motorcycle;
use Mockery\Exception;

class VehicleFactory
{
    public static function createVehicle($type)
    {
        switch ($type){
            case 'motorcycle':
                return new Motorcycle();
                break;

            case 'pickup-truck':
                return  new PickupTruck();
                break;

            case 'truck':
                return new Truck();
                break;

            case 'airplane':
                return new Airplane();
                break;

            default:
            throw new \Exception('Invalid vehicle type provided!');
        }
    }

}
