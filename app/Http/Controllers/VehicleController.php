<?php

namespace App\Http\Controllers;

use App\Services\Vehicle\VehicleFactory;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function deliver($type)
    {
        $vehicle = VehicleFactory::createVehicle($type);
        return $vehicle->deliver();
    }
}
