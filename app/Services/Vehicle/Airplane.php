<?php

namespace App\Services\Vehicle;

class Airplane implements Vehicle
{

    public function deliver()
    {
        return 'Delivering by Airplane';
    }
}
