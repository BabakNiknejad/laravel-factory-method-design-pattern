<?php

namespace App\Services\Vehicle;

class Motorcycle implements Vehicle
{

    public function deliver()
    {
        return 'Delivering by Motorcycle';
    }
}
