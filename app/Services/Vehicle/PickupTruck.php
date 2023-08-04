<?php

namespace App\Services\Vehicle;

class PickupTruck implements Vehicle
{

    public function deliver()
    {
        return 'Delivering by PickupTruck';
    }
}
