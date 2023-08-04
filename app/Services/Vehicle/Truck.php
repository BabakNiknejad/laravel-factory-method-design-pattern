<?php

namespace App\Services\Vehicle;

class Truck implements Vehicle
{

    public function deliver()
    {
        return 'Delivering by Truck';
    }
}
